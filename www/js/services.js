var app = angular.module('becas.services', ['ionic','ngCordova']);

app.service('loginServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){
    var usuario = "";
    var email="";

    this.login = function(email, password){
        var session = $q.defer();
        session.promise.then(userSession);
        var log = $http.get('http://192.168.1.100/becas/web/usuarios?UsuariosSearch[email]=' + email + '&UsuariosSearch[clave]=' + password)
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
            $ionicLoading.hide(
                );
            if(data.length == 0){
                $ionicPopup.alert({
                    title: 'Fallo el ingreso',
                    template: 'Por favor revise sus datos'
                });
            }
            else{
                $ionicLoading.hide();
                loginPut(data);
               // studentPut(data[0].usuario);   
                $state.go('eventmenu.options.states');

            }
        }
    };
    loginPut = function(data){
        usuario = data[0].usuario;
        email = data[0].email;

    };
     this.loginFunction = function(){
        return { 
        usuario : usuario,
        email : email
    }
}
}]);

app.service('evaluacionServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){
   var causa1 = "";
   var causa2 = "";
   var causa3 = "";
var causa4 = "";
var comentarioE = "";

this.evaluacion = function(dni){
    var session = $q.defer();
    session.promise.then(evaluacionSession);
    var hola = $http.get('http://192.168.1.100/becas/web/evaluacion?EvaluacionSearch[dniE]=' + dni)
    .success(function(data,status, headers,config){
      session.resolve(data);
    
    })
    .error(function(data,status,headers,config){
    });
    function evaluacionSession(data){
         evaluacionPut(data);
    }


    evaluacionPut = function(data){
        causa1 = data[0].causa1;
        causa2 = data[0].causa2;
        causa3 = data[0].causa3;
        causa4 = data[0].causa4;
        comentarioE = data[0].comentarioE;
    };

     this.evaluacionFunction = function(){
        return { 
        causa1 : causa1,
        causa2 : causa2,
        causa3 : causa3,
        causa4 : causa4,
        comentarioE : comentarioE
    }
}
}
}]);

app.service('alumnosServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){

var becario;
var apellido;
var nombre;
var idalumno;
var idcarrera;

this.alumnos = function(dni){
    var session = $q.defer();
    session.promise.then(alumnosSession);
    var hola = $http.get('http://192.168.1.100/becas/web/alumnos?AlumnosSearch[dni]=' + dni)
    .success(function(data,status, headers,config){
      session.resolve(data);
    
    })
    .error(function(data,status,headers,config){
    });
    function alumnosSession(data){
         alumnosPut(data);
    }


  alumnosPut = function(data){
        becario = data[0].becario;
        apellido = data[0].apellido;
        nombre = data[0].nombre;
        idcarrera = data[0].idcarrera;
        idalumno = data[0].idAlumno;
    };

     this.alumnosFunction = function(){
        return { 
            becario : becario,
            apellido : apellido,
            nombre : nombre,
            idcarrera : idcarrera,
            idalumno : idalumno
    }
}
}
}]);
app.service('carrerasServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){

var carrera;

this.carreras = function(idcarrera){
    var session = $q.defer();
    session.promise.then(carrerasSession);
    var hola = $http.get('http://192.168.1.100/becas/web/carreras?CarrerasSearch[idcarrera]=' + idcarrera)
    .success(function(data,status, headers,config){
      session.resolve(data);
    
    })
    .error(function(data,status,headers,config){
    });
    function carrerasSession(data){
         carrerasPut(data);
    }


  carrerasPut = function(data){
        carrera = data[0].carrera;
    };

     this.carrerasFunction = function(){
        return { 
            carrera : carrera
    }
}
}
}]);
app.service('domicilioServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){

var telefono;

this.domicilio = function(idalumno){
    var session = $q.defer();
    session.promise.then(domicilioSession);
    var hola = $http.get('http://192.168.1.100/becas/web/domicilio?DomicilioSearch[dni]=' + idalumno)
    .success(function(data,status, headers,config){
      session.resolve(data);
    
    })
    .error(function(data,status,headers,config){
    });
    function domicilioSession(data){
         domicilioPut(data);
    }


  domicilioPut = function(data){
        telefono = data[0].telefono;
    };

     this.domicilioFunction = function(){
        return { 
            telefono : telefono,
    }
}
}
}]);