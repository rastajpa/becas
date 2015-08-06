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

    };

    this.loginFunction = function(){
        return { 
            usuario : usuario,
            email : email
        }
    }
}]);

app.service('evaluacionServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading','alumnosServices', function ($q,$http,$ionicPopup,$state,$ionicLoading,alumnosServices){
    var causa1 = null;
    var causa2 = null;
    var causa3 = null;
    var causa4 = null;
    var comentarioE = "";

        evaluacionPut = function(response){
            causa1 = response.data[0].causa1;
            causa2 = response.data[0].causa2;
            causa3 = response.data[0].causa3;
            causa4 = response.data[0].causa4;
            comentarioE = response.data[0].comentarioE;
        };

    var evaluacionServices = {
        asyn : function (dni) {
        var promise = $http.get('http://192.168.1.100/becas/web/evaluacion?EvaluacionSearch[dniE]=' + dni).
        then(function ( response ) {
            evaluacionPut(response);
            return response.data
        });
        return promise;
    },
 evaluacionFunction : function(){
            return { 
                causa1 : causa1,
                causa2 : causa2,
                causa3 : causa3,
                causa4 : causa4,
                comentarioE : comentarioE
            }
        }
    }
return evaluacionServices;
}]);

app.service('alumnosServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){
    var becario = "";
    var apellido = "";
    var nombre = "";
    var idalumno = "";
    var idcarrera = "";

    alumnosPut = function(response){
            becario = response.data[0].becario;
            apellido = response.data[0].apellido;
            nombre = response.data[0].nombre;
            idcarrera = response.data[0].idcarrera;
            idalumno = response.data[0].idAlumno;
        };

    var alumnosServices = {
    asyn : function(dni){
        var promise = $http.get('http://192.168.1.100/becas/web/alumnos?AlumnosSearch[dni]=' + dni)
        .then(function(response){
            alumnosPut(response);
            return response.data;
        });
        return promise;
    },
alumnosFunction : function(){
            return { 
                becario : becario,
                apellido : apellido,
                nombre : nombre,
                idcarrera : idcarrera,
                idalumno : idalumno
            }
        }
    }
return alumnosServices;
}]);

app.service('carrerasServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){

    var carrera = "";
     carrerasPut = function(response){
            carrera = response.data[0].carrera;
        };


    var carrerasServices = {
    asyn : function(idcarrera){
        var promise = $http.get('http://192.168.1.100/becas/web/carreras?CarrerasSearch[idcarrera]=' + idcarrera)
        .then(function(response){
            carrerasPut(response);
            return response.data;
        })
    return promise;
    },
 carrerasFunction : function(){
            return { 
                carrera : carrera
            }
        }
    };
    return carrerasServices;      
}]);

app.service('domicilioServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){

    var telefono = "";

    domicilioPut = function(response){
            telefono = response.data[0].telefono;
        };

    var domicilioServices = {
    asyn : function(idalumno){
        var promise = $http.get('http://192.168.1.100/becas/web/domicilio?DomicilioSearch[dni]=' + idalumno)
        .then(function(response){
            domicilioPut(response);
            return response.data;
        });
        return promise;
    },
    domicilioFunction : function(){
            return { 
                telefono : telefono,
            }
        }
    };
    return domicilioServices;
}]);