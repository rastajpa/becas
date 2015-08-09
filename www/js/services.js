var app = angular.module('becas.services', ['ionic','ngCordova']);
app.service('loginServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){
    var usuario = "";
    var email="";
    var conectado = false;
    this.logout = function(){
        usuario = "";
        email = "";
        conectado = false;
        $state.go('eventmenu.home');
    };
    this.login = function(email, password){
        var session = $q.defer();
        session.promise.then(userSession);
        var log = $http.get('http://10.0.0.32/becas/web/usuarios?UsuariosSearch[email]=' + email + '&UsuariosSearch[clave]=' + password)
        .success(function(data,status, headers,config){
            $ionicLoading.hide();
            session.resolve(data);
        })
        .error(function(data,status,headers,config){
            $ionicLoading.hide();
            $ionicPopup.alert({
                title: 'ERROR '+ status + '!',
                template: 'Tiempo de espera agotado. Por favor revise su conexión a internet y vuelva a intentarlo.'
            });
        });
        function userSession(data){
            $ionicLoading.hide();
            if(data.length == 0){
                $ionicPopup.alert({
                    title: 'Fallo el ingreso',
                    template: 'Por favor revise sus datos'
                });
            }
            else{
                $ionicLoading.hide();
                loginPut(data);
            
            }
        }
    };
    loginPut = function(data){
        usuario = data[0].usuario;
        email = data[0].email;
        conectado = true;
        $state.go('eventmenu.options');
    };
    this.loginFunction = function(){
        return { 
            usuario : usuario,
            email : email,
            conectado : conectado
        }
    };
}]);
app.service('evaluacionServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading','alumnosServices', function ($q,$http,$ionicPopup,$state,$ionicLoading,alumnosServices){
    var causa1 = null;
    var causa2 = null;
    var causa3 = null;
    var causa4 = null;
    var comentarioE = "";
    this.evaluacion = function(dni){
        var session = $q.defer();
        session.promise.then(evaluacionSession);
        var hola = $http.get('http://10.0.0.32/becas/web/evaluacion?EvaluacionSearch[dniE]=' + dni)
        .success(function(data,status, headers,config){
            session.resolve(data);
        })
        .error(function(data,status,headers,config){
        });
        function evaluacionSession(data){
            evaluacionPut(data);
        } 
    };
    evaluacionPut = function(data){
        causa1 = data[0].causa1;
        causa2 = data[0].causa2;
        causa3 = data[0].causa3;
        causa4 = data[0].causa4;
        comentarioE = data[0].comentarioE;
        console.log(data);
        //$state.go('eventmenu.options.states')
    };
    this.evaluacionFunction = function(){
        return { 
            causa1 : causa1,
            causa2 : causa2,
            causa3 : causa3,
            causa4 : causa4,
            comentarioE : comentarioE
        }
    };
}]);
app.service('alumnosServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){
    var becario = "";
    var apellido = "";
    var nombre = "";
    var idalumno = "";
    var idcarrera = "";
    var fechanac = "";
    this.alumnos = function(dni){
        var session = $q.defer();
        session.promise.then(alumnosSession);
        var hola = $http.get('http://10.0.0.32/becas/web/alumnos?AlumnosSearch[dni]=' + dni)
        .success(function(data,status,headers,config){
            session.resolve(data);
        })
        .error(function(data,status,headers,config){
        });
        function alumnosSession(data){
            alumnosPut(data);
            //$state.go('eventmenu.options.states');
        }
    };
    alumnosPut = function(data){
        becario = data[0].becario;
        apellido = data[0].apellido;
        nombre = data[0].nombre;
        idcarrera = data[0].idcarrera;
        idalumno = data[0].idalumno;
        fechanac = data[0].fechanac;
        
    };
    this.alumnosFunction = function(){
        return { 
            becario : becario,
            apellido : apellido,
            nombre : nombre,
            idcarrera : idcarrera,
            idalumno : idalumno,
            fechanac : fechanac
        }
    };
}]);
app.service('carrerasServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){
    var carrera = "";
    this.carreras = function(idcarrera){
        var session = $q.defer();
        session.promise.then(carrerasSession);
        var hola = $http.get('http://10.0.0.32/becas/web/carreras?CarrerasSearch[idcarrera]=' + idcarrera)
        .success(function(data,status, headers,config){
            session.resolve(data);
        })
        .error(function(data,status,headers,config){
        });
        function carrerasSession(data){
            carrerasPut(data);
        }
    };
    carrerasPut = function(data){
        carrera = data[0].carrera;
    };
    this.carrerasFunction = function(){
        return { 
            carrera : carrera
        }
    };
}]);
app.service('domicilioServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){
    var telefono = "";
    var calle = "";
    var celular = "";
    var piso = "";
    var dpto = "";
    this.domicilio = function(idalumno){
        var session = $q.defer();
        session.promise.then(domicilioSession);
        var hola = $http.get('http://10.0.0.32/becas/web/domicilio?DomicilioSearch[dni]=' + idalumno)
        .success(function(data,status, headers,config){
            session.resolve(data);
        })
        .error(function(data,status,headers,config){
        });
        function domicilioSession(data){
            domicilioPut(data);
        }
    };
    domicilioPut = function(data){
        telefono = data[0].telefono;
        calle = data[0].telefono;
        celular = data[0].telefono;
        piso = data[0].piso;
        dpto = data[0].dpto;
    };
    this.domicilioFunction = function(){
        return { 
            telefono : telefono,
            calle : calle,
            celular : celular,
            piso : piso,
            dpto : dpto
        }
    };
}]);