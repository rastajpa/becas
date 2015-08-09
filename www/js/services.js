var app = angular.module('becas.services', ['ionic','ngCordova']);
app.service('loginServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){

    var usuario = "";
    var email="";
    var conectado = false;


    var logout = function(){
        usuario = "";
        email = "";
        conectado = false;
    }

    var loginPut = function(response){
        usuario = response.data[0].usuario;
        email = response.data[0].email;
        conectado = true;
    };
    var loginServices = function(email, password){
        return $http.get('http://localhost/becas/web/usuarios?UsuariosSearch[email]=' + email + '&UsuariosSearch[clave]=' + password)
    };

    var loginFunction = function(){
        return { 
            usuario : usuario,
            email : email,
            conectado : conectado
        };
    };

    return {loginServices : loginServices,
        loginPut : loginPut,
        loginFunction : loginFunction,
        logout : logout}
    }]);
app.service('evaluacionServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){
    var causa1 = null;
    var causa2 = null;
    var causa3 = null;
    var causa4 = null;
    var comentarioE = "";

    var evaluacionPut = function(response){
        causa1 = response.data[0].causa1;
        causa2 = response.data[0].causa2;
        causa3 = response.data[0].causa3;
        causa4 = response.data[0].causa4;
        comentarioE = response.data[0].comentarioE;
    };

    var evaluacionServices = function (dni) {
        return $http.get('http://localhost/becas/web/evaluacion?EvaluacionSearch[dniE]=' + dni)
    };

    var evaluacionFunction = function(){
        return { 
            causa1 : causa1,
            causa2 : causa2,
            causa3 : causa3,
            causa4 : causa4,
            comentarioE : comentarioE
        };};

        return {evaluacionServices : evaluacionServices,
            evaluacionPut : evaluacionPut,
            evaluacionFunction : evaluacionFunction}
        }]);
app.service('alumnosServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){
    var becario = "";
    var apellido = "";
    var nombre = "";
    var idalumno = "";
    var idcarrera = ""
    var fechanac = "";

    var alumnosPut = function(response){
        becario = response.data[0].becario;
        apellido = response.data[0].apellido;
        nombre = response.data[0].nombre;
        idcarrera = response.data[0].idcarrera;
        idalumno = response.data[0].idAlumno;
        return true;
    };

    var alumnosServices = function(dni) {
        return $http.get('http://localhost/becas/web/alumnos?AlumnosSearch[dni]=' + dni)
    };

    var alumnosFunction = function(){
        return { 
            becario : becario,
            apellido : apellido,
            nombre : nombre,
            idcarrera : idcarrera,
            idalumno : idalumno,
            fechanac : fechanac
        }
    };
    return {alumnosServices : alumnosServices,
        alumnosPut : alumnosPut,
        alumnosFunction : alumnosFunction}
    }]);
app.service('carrerasServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){
    var carrera = "";

    var carrerasPut = function(response){
        carrera = response.data[0].carrera;
    };

    var carrerasServices =  function(idcarrera){
        return $http.get('http://localhost/becas/web/carreras?CarrerasSearch[idcarrera]=' + idcarrera)
    };

    var carrerasFunction = function(){
        return { 
            carrera : carrera
        }
    }

    return {carrerasServices : carrerasServices,
        carrerasPut : carrerasPut,
        carrerasFunction : carrerasFunction}      
    }]);
app.service('domicilioServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){
    var telefono = "";
    var calle = "";
    var celular = "";
    var piso = "";
    var dpto = "";

    var domicilioPut = function(response){
        telefono = response.data[0].telefono;
    };

    var domicilioServices = function(idalumno){
        return $http.get('http://localhost/becas/web/domicilio?DomicilioSearch[dni]=' + idalumno)
    };

    var domicilioFunction = function(){
        return { 
            telefono : telefono,
            calle : calle,
            celular : celular,
            piso : piso,
            dpto : dpto
        }
    };

    return {domicilioServices: domicilioServices,
        domicilioFunction : domicilioFunction,
        domicilioPut : domicilioPut}
    }]);
app.service('causaServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){
    var causa= {};

    var causaPut = function(response){
        for (var i = response.data.length - 1; i >= 0; i--) {
            causa[i] = response.data[i].causa;
        };
    };

    var causaServices = function(){
        return $http.get('http://localhost/becas/web/causa')
    };

    var causaFunction = function(){
        return { 
            causa : causa
        }
    };

    return {causaServices: causaServices,
        causaFunction : causaFunction,
        causaPut :causaPut}
    }]);