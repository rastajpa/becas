var app = angular.module('becas.services', ['ionic','ngCordova']);

app.service('loginServices', ['$q','$http','$ionicPopup','$state', '$ionicLoading', function ($q,$http,$ionicPopup,$state,$ionicLoading){
    var usuario = "";
    var idAlumno="";
    var idCarrera="";
    this.login = function(email, password){
        var session = $q.defer();
        session.promise.then(userSession);
        var log = $http.get('http://192.168.1.109/becas/web/usuarios?UsuariosSearch[email]=' + email + '&UsuariosSearch[clave]=' + password)
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
                loginPut(data[0].usuario);
                studentPut(data[0].usuario);
            
                $state.go('eventmenu.options.states');
            }
        }
    };
    loginPut = function(user){
        usuario = user;
    };
    studentPut = function(user){

        var student = $q.defer();
        student.promise.then(studentFunction);
        var log = $http.get('http://192.168.1.109/becas/web/alumnos?AlumnosSearch[dni]=' + user)
        .success(function(data,status, headers,config){
            student.resolve(data);
        })
        .error(function(data,status,headers,config){
        });
        function studentFunction(data){
           studentDataPut(data[0].idalumno,data[0].idcarrera);
        }
    };
    studentDataPut = function(ida,idc){
        
        idAlumno = ida;
        idCarrera = idc;
        console.log(idAlumno);
    };
   

    this.loginFunction = function(){
        return { 
        usuario : usuario,
        idAlumno : idAlumno,
        idCarrera : idCarrera
    };
};
       

}]);

/*
app.service('loginServices',function (){
var usuario = "";
var idAlumno = "";
var idCarrera = "";
this.loginPut = function(user){
usuario = user;
};
this.alumnoPut = function(idalumno,idcarrera){
idAlumno = idalumno;
idCarrera = idcarrera;

};

this.loginFunction = function(){
return { 
usuario : usuario,
idAlumno : idAlumno,
idCarrera : idCarrera
};
}
});*/