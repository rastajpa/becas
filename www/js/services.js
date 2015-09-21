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
    var loginServices = function(dni, password){
        var hash = CryptoJS.MD5(password);
        return $http.get('http://186.109.90.154/appmovil/web/usuarios?UsuariosSearch[usuario]=' + dni + '&UsuariosSearch[clave]=' + hash.toString())
    };
    var loginFunction = function(){
        return { 
            usuario : usuario,
            email : email,
            conectado : conectado
        };
    };
    return {
        loginServices : loginServices,
        loginPut : loginPut,
        loginFunction : loginFunction,
        logout : logout
    }
}]);
app.service('evaluacionServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){
    var causa1 = 0;
    var causa2 = 0;
    var causa3 = 0;
    var causa4 = 0;
    var comentarioE = "";
    var evaluacionPut = function(response){
        causa1 = response.data[0].causa1;
        causa2 = response.data[0].causa2;
        causa3 = response.data[0].causa3;
        causa4 = response.data[0].causa4;
        comentarioE = response.data[0].comentarioE;
        puntajeE = response.data[0].puntajeE;
    };
    var evaluacionServices = function (dni) {
        return $http.get('http://186.109.90.154/appmovil/web/evaluacion?EvaluacionSearch[dniE]=' + dni)
    };
    var evaluacionFunction = function(){
        return { 
            causa1 : causa1,
            causa2 : causa2,
            causa3 : causa3,
            causa4 : causa4,
            comentarioE : comentarioE,
            puntajeE : puntajeE
        };};
        return {
            evaluacionServices : evaluacionServices,
            evaluacionPut : evaluacionPut,
            evaluacionFunction : evaluacionFunction
        }
    }]);
app.service('alumnosServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){
    var becario = "";
    var apellido = "";
    var nombre = "";
    var idalumno = "";
    var idcarrera = ""
    var fechanac = "";
    var idnivel = "";
    var alumnosPut = function(response){
        becario = response.data[0].becario;
        apellido = response.data[0].apellido;
        nombre = response.data[0].nombre;
        idcarrera = response.data[0].idcarrera;
        idalumno = response.data[0].idalumno;
        idnivel = response.data[0].idnivel;
        fechanac = response.data[0].fechanac;
        return true;
    };
    var alumnosServices = function(dni) {
        return $http.get('http://186.109.90.154/appmovil/web/alumnos?AlumnosSearch[dni]=' + dni)
    };
    var alumnosFunction = function(){
        return { 
            becario : becario,
            apellido : apellido,
            nombre : nombre,
            idcarrera : idcarrera,
            idalumno : idalumno,
            fechanac : fechanac,
            idnivel : idnivel
        }
    };
    return {
        alumnosServices : alumnosServices,
        alumnosPut : alumnosPut,
        alumnosFunction : alumnosFunction
    }
}]);
app.service('carrerasServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){
    var carrera = "";
    var carrerasPut = function(response){
        carrera = response.data[0].carrera;
    };
    var carrerasServices =  function(idcarrera){
        return $http.get('http://186.109.90.154/appmovil/web/carreras?CarrerasSearch[idcarrera]=' + idcarrera)
    };
    var carrerasFunction = function(){
        return { 
            carrera : carrera
        }
    }
    return {
        carrerasServices : carrerasServices,
        carrerasPut : carrerasPut,
        carrerasFunction : carrerasFunction
    }      
}]);
app.service('domicilioServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){
    var telefono = "";
    var calle = "";
    var celular = "";
    var piso = "";
    var dpto = "";
    var domicilioPut = function(response){
        telefono = response.data[0].telefono;
        calle = response.data[0].calle;
        celular = response.data[0].celular;
        piso = response.data[0].piso;
        dpto = response.data[0].dpto;
    };
    var domicilioServices = function(idalumno){
        return $http.get('http://186.109.90.154/appmovil/web/domicilio?DomicilioSearch[idalumno]=' + idalumno)
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
    return {
        domicilioServices: domicilioServices,
        domicilioFunction : domicilioFunction,
        domicilioPut : domicilioPut
    }
}]);
app.service('causaServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){
    var causa= {};
    var causaPut = function(response){
        for (var i = response.data.length - 1; i >= 0; i--) {
            causa[i] = response.data[i].causa;
        };
    };
    var causaServices = function(){
        return $http.get('http://186.109.90.154/appmovil/web/causa')
    };
    var causaFunction = function(){
        return { 
            causa : causa
        }
    };
    return {
        causaServices: causaServices,
        causaFunction : causaFunction,
        causaPut :causaPut
    }
}]);
app.service('escuelasServices', ['$q','$http', function ($q,$http){
    var escuelasServices = function(idescuela){
        return $http.get('http://186.109.90.154/appmovil/web/escuelas?EscuelasSearch[idescuela]=' + idescuela)
    };
    var escuelasPut = function(response){
        escuela = response.data[0].escuela;
    };
    var escuelasFunction = function(){
        return { 
            escuela : escuela
        }
    };
    return {
        escuelasServices: escuelasServices,
        escuelasFunction : escuelasFunction,
        escuelasPut :escuelasPut
    }
}]);
app.service('secundariaServices', ['$q','$http', function ($q,$http){   
    var secundariaServices = function(dni){
        return $http.get('http://186.109.90.154/appmovil/web/secundarias?SecundariasSearch[dni]=' + dni)
    };
    var secundariaPut = function(response){
        apellido = response.data[0].apellido;
        causa = response.data[0].causa;
        dni = response.data[0].dni;
        escuela = response.data[0].escuela;
        idsec = response.data[0].idsec;
        nombre = response.data[0].nombre;
        resultado = response.data[0].resultado;
    };
    var secundariaFunction = function(){
        return { 
            apellido : apellido,
            causa : causa,
            dni : dni,
            escuela : escuela,
            idsec : idsec,
            nombre : nombre,
            resultado : resultado,
        }
    };
    return {
        secundariaServices: secundariaServices,
        secundariaFunction : secundariaFunction,
        secundariaPut :secundariaPut
    }
}]);
app.service('newsServices', ['$q','$http', function ($q,$http){
    var news = function(){
        return $http.get('http://186.109.90.154/appmovil/web/noticias')
    };
    return {
        news: news
    }
}]);
app.service('corteServices', ['$q','$http', function ($q,$http){
    var corte = function(){
        return $http.get('http://186.109.90.154/appmovil/web/corte')
    };
    return {
        corte: corte
    }
}]);
app.service( 'HardwareBackButtonManager', function($ionicPlatform){
  this.deregister = undefined;

  this.disable = function(){
    this.deregister = $ionicPlatform.registerBackButtonAction(function(e){
    e.preventDefault();
    return false;
    }, 101);
  }

  this.enable = function(){
    if( this.deregister !== undefined ){
      this.deregister();
      this.deregister = undefined;
    }
  }
  return this;
});