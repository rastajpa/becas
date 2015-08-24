angular.module('becas.controllers', ['ionic','ngCordova'])
.config(function($stateProvider, $urlRouterProvider) {
  $stateProvider
  .state('eventmenu', {
    url: "/event",
    abstract: true,
    templateUrl: "pages/menu.html",
    controller:"MenuCtrl"
  })
  .state('eventmenu.home', {
    url: "/home",
    views: {
      'menuContent' :{
        templateUrl: "pages/home.html",
        controller: "HomeCtrl"
      }
    }
  })
  .state('eventmenu.checkin', {
    url: "/check-in",
    views: {
      'menuContent' :{
        templateUrl: "pages/check-in.html",
        controller: "CheckinCtrl"
      }
    }
  })
  .state('eventmenu.attendees', {
    url: "/attendees",
    views: {
      'menuContent' :{
        templateUrl: "pages/attendees.html",
        controller: "AttendeesCtrl"
      }
    }
  })
  .state('eventmenu.about', {
    url: "/about",
    views: {
      'menuContent' :{
        templateUrl: "pages/about.html",
        controller: "aboutCtrl"
      }
    }
  }) 
  .state('eventmenu.news', {
    url: "/news",
    views: {
      'menuContent' :{
        templateUrl: "pages/news.html",
        controller: "newsCtrl"
      }
    }
  })

  .state('eventmenu.options', {
    url: "/options",
    views: {
      'menuContent' :{
        templateUrl: "pages/options.html",
        controller: "optionsCtrl"
      }
    }
  })
  .state('eventmenu.options.states', {
    url: "/states",
    views: {
      'state-tab' :{
        templateUrl: "pages/states.html",
        controller: "statesCtrl"
      }
    }
  })
  .state('eventmenu.options.payments', {
    url: "/payments",
    views: {
      'payments-tab' :{
        templateUrl: "pages/payments.html",
        controller: "paymentsCtrl"
      }
    }
  })
  .state('eventmenu.options.claims', {
    url: "/claims",
    views: {
      'claims-tab' :{
        templateUrl: "pages/claims.html",
        controller: "claimsCtrl"
      }
    }
  })
  .state('eventmenu.user', {
    url: "/user",
    views: {
      'menuContent' :{
        templateUrl: "pages/user.html",
        controller: "userCtrl"
      }
    }
  })
  $urlRouterProvider.otherwise("/event/home");
})
.controller('MenuCtrl', function($scope,$q,$http, $ionicPopup, $state,$ionicHistory,loginServices) {
  $scope.conectado = false;
  $scope.userConnected = function () {
    $scope.login = loginServices.loginFunction();
  }
})
.controller('HomeCtrl', function($scope,$state,$ionicPopup,loginServices,$ionicLoading) {
  $scope.data = {};
  $scope.login = function (){
    $ionicLoading.show({
      content: 'Loading',
      animation: 'fade-in',
      showBackdrop: true,
      maxWidth: 200,
      showDelay: 0
    });
    loginServices.loginServices($scope.data.email,$scope.data.password).then(function(data){
      if(data.data.length == 0){
        $ionicLoading.hide();
        $ionicPopup.alert({
          title: 'Fallo el ingreso',
          template: 'Por favor revise sus datos. Si todavía no tiene un usuario y una contraseña regístrese en el sitio web: www.becasuniversitarias.unt.edu.ar'
        });
      }
      else{
        $ionicLoading.hide();
        loginServices.loginPut(data);                
        $state.go('eventmenu.options.states');               
      }
    });
  }
})
.controller('MainCtrl', function($scope, $ionicSideMenuDelegate,$state,$ionicNavBarDelegate,$ionicHistory,$ionicPopover,loginServices) {
  $ionicPopover.fromTemplateUrl('pages/popover.html', {
    scope: $scope
  }).then(function(popover) {
    $scope.popover = popover;
  });
  $scope.setPlatform = function(p) {
    document.body.classList.remove('platform-ios');
    document.body.classList.remove('platform-android');
    document.body.classList.add('platform-' + p);
    $scope.demo = p;
  }
  $scope.openPopover = function($event) {
    $scope.popover.show($event);
  };
  $scope.closePopover = function() {
    $scope.popover.hide();
  };
  $scope.$on('$destroy', function() {
    $scope.popover.remove();
  });
  $scope.$on('popover.hidden', function() {
  });
  $scope.$on('popover.removed', function() {
  });
  $scope.toggleLeft = function() {
    $ionicSideMenuDelegate.toggleLeft();
  };
  $ionicHistory.nextViewOptions({
    disableAnimate: true,
    disableBack: true
  });
  $scope.logout = function () {
    loginServices.logout();
    $state.go('eventmenu.home');
    $scope.closePopover();
  }
})
.controller('newsCtrl', function($scope,newsServices) {
  $scope.news = []
  newsServices.news().then(function (data){
    $scope.news = data.data;
  }) 
})
.controller('aboutCtrl', function($scope,$ionicModal,$ionicLoading, $timeout, $ionicPopup,$cordovaEmailComposer) {
  $ionicModal.fromTemplateUrl('pages/map.html', {
    scope: $scope
  }).then(function(modal) {
    $scope.modal = modal;
  })
  $scope.openModal = function () {
    var load = false;
    $scope.modal.show();
    var latlng = new google.maps.LatLng(-26.8376638,-65.2127732);
    var myOptions = {
      zoom: 18,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map"), myOptions);
    google.maps.event.addDomListener(window, "load");
    var marker = new google.maps.Marker({
      position: latlng,
      map: map,
      title: "Secretaría General de Becas"
    });
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
    });
  };
  $scope.sendEmail= function() {
    $cordovaEmailComposer.isAvailable().then(function() {
    }, function () {
      alert("No puede usar este servicio debido a que su disposivo no lo soporta. Por favor realice el reclamo a becascomunic@gmail.com")
    });
    var email = {
      to: 'becascomunic@gmail.com',
      isHtml: true
    };
    $cordovaEmailComposer.open(email).then(null, function () {
    });
  }
})
.controller('optionsCtrl', function($q,$scope,$ionicHistory,$state,$ionicSlideBoxDelegate,loginServices,evaluacionServices,alumnosServices) { 
})
.controller('claimsCtrl', function($scope,$ionicHistory, $cordovaEmailComposer, $q, $http,alumnosServices,loginServices,carrerasServices,domicilioServices) {
  $scope.login = loginServices.loginFunction();
  $scope.email = $scope.login.email;
  $scope.dni = $scope.login.usuario;
  $scope.alumnos = alumnosServices.alumnosFunction();
  $scope.Apellido = $scope.alumnos.apellido;
  $scope.Nombre = $scope.alumnos.nombre;
  carrerasServices.carrerasServices($scope.alumnos.idcarrera).then(function (data){
    carrerasServices.carrerasPut(data);
    domicilioServices.domicilioServices($scope.alumnos.idalumno).then(function (data){
      domicilioServices.domicilioPut(data);
      $scope.carreras = carrerasServices.carrerasFunction();
      $scope.domicilio = domicilioServices.domicilioFunction();
      $scope.Telefono = $scope.domicilio.telefono;
      $scope.items = [
      {text : "No quedé preseleccionado/a"},
      {text : "Documentación fuera de término"},
      {text : "Inscripción fuera de término"},
      {text : "Excepción a los requisitos (Promedio, Ingresos, Permanencia, Regularidad)"},
      {text : "Documentación faltante o incorrecta"},
      {text : "Revisión de la Evaluación"}
      ]
      $scope.mot = {otros :""};
      $scope.sendEmail= function() {
        $scope.itemArray = [];
        $scope.motivos = "";
        angular.forEach($scope.items, function(item){
          if (!!item.selected) $scope.itemArray.push(item.text);
        })
        for (var i = $scope.itemArray.length - 1; i >= 0; i--) {
          $scope.motivos = $scope.motivos + ('<br>' + '*' + $scope.itemArray[i])
        };
        $cordovaEmailComposer.isAvailable().then(function() {
        }, function () {
          alert("No puede usar este servicio debido a que su disposivo no lo soporta. Por favor realice el reclamo a becascomunic@gmail.com")
        });
        var email = {
          to: 'becascomunic@gmail.com',
          subject: 'Reclamos',
          body: "Apellido y Nombre: " + $scope.Apellido + ', ' + $scope.Nombre + '<br>' +
          "DNI: " + $scope.dni + '<br>' +
          "Carrera o Escuela: " + $scope.carreras.carrera + '<br>' +
          "Teléfono: " + $scope.Telefono + '<br>' +
          "Email: " + $scope.email + '<br>' +
          "Motivo/s: " + $scope.motivos + '<br>' + 
          "Otro motivo: " + $scope.mot.otros,
          isHtml: true
        };
        $cordovaEmailComposer.open(email).then(null, function () {
        });
      }
    })
  })
})
.controller('paymentsCtrl', function($scope,$ionicHistory,$q,$http) {
})
.controller('statesCtrl', function($scope,$ionicHistory,$q,$http,causaServices,corteServices,secundariaServices,loginServices,evaluacionServices,alumnosServices,carrerasServices,domicilioServices) {
  $scope.login = loginServices.loginFunction();
  evaluacionServices.evaluacionServices($scope.login.usuario).then(function (data){
    console.log(data);
    evaluacionServices.evaluacionPut(data);
    $scope.evaluacion = evaluacionServices.evaluacionFunction();
    alumnosServices.alumnosServices($scope.login.usuario).then(function (data){
      alumnosServices.alumnosPut(data);
      $scope.alumnos = alumnosServices.alumnosFunction();
      if($scope.alumnos.idnivel== 1 || $scope.alumnos.idnivel == 3){
      if($scope.evaluacion.causa1== 0 && $scope.evaluacion.causa2== 0 &&
        $scope.evaluacion.causa3== 0 && $scope.evaluacion.causa4== 0 &&
        $scope.evaluacion.comentarioE== ''){
        corteServices.corte().then(function (data){
          console.log($scope.evaluacion.puntajeE);
        if($scope.evaluacion.puntajeE < data.data[0].valorcorte){
           $scope.state = "FUERA DE CONCURSO";
           $scope.puntajeE = $scope.evaluacion.puntajeE;
           $scope.puntajeMinimo= data;
        }
        else{
          if($scope.alumnos.becario==1){
          $scope.state = "RENOVANTE";
        }
        if($scope.alumnos.becario==0){
          $scope.state = "APROBADO";
        }
      }
    });
  }
      else{
        $scope.state = "FUERA DE CONCURSO";
        causaServices.causaServices().then(function (data){
          causaServices.causaPut(data);
          $scope.causa = causaServices.causaFunction();
          if($scope.evaluacion.causa1!= null ){
            $scope.cause1 = $scope.causa.causa[0];
          }
          if($scope.evaluacion.causa2!= null ){
            $scope.cause2 = $scope.causa.causa[1];
          }
          if($scope.evaluacion.causa3!= null ){
            $scope.cause3 =$scope.causa.causa[2];
          }
          if($scope.evaluacion.causa4!= null ){
            $scope.cause4 = $scope.causa.causa[3];        
          }
          $scope.commentE = $scope.evaluacion.comentarioE;
        }) 
      }
    }
    else{
       secundariaServices.secundariaServices().then(function (data){
      secundariaServices.secundariaPut(data);
      $scope.secundaria = secundariaServices.secundariaFunction();
      console.log($scope.secundaria );
      if($scope.secundaria.resultado == 1 ){
        $scope.state = "APROBADO";
      }
      else{
        $scope.state = "DESAPROBADO";
        $scope.causa1 = $scope.secundaria.causa;
      }
       })
    }
  })
})   
})
.controller('userCtrl', function($scope,$ionicHistory,$ionicNavBarDelegate,loginServices,alumnosServices,domicilioServices,carrerasServices,escuelasServices,secundariaServices) {
  loginServices.loginServices().then(function (data){
    $scope.login = loginServices.loginFunction();
    alumnosServices.alumnosServices($scope.login.usuario).then(function (data){
      alumnosServices.alumnosPut(data);
      $scope.alumnos = alumnosServices.alumnosFunction();
      if($scope.alumnos.idnivel == 2)
      {
        secundariaServices.secundariaServices().then(function (data){
          secundariaServices.secudariaPut(data);
          $scope.alumnos = secundariaServices.secudariaFunction();
          escuelasServices.escuelasServices($scope.alumnos.escuela).then(function (data){
            escuelasServices.escuelasPut(data);
            $scope.carreras = escuelasServices.escuelasFunction();
            $scope.carrera = $scope.carreras.escuela;
            domicilioServices.domicilioServices($scope.alumnos.idalumno).then(function (data){
              domicilioServices.domicilioPut(data);
              $scope.domicilio = domicilioServices.domicilioFunction();
            })
          })
        })
      }
      else{
        carrerasServices.carrerasServices($scope.alumnos.idcarrera).then(function (data){
          carrerasServices.carrerasPut(data);
          domicilioServices.domicilioServices($scope.alumnos.idalumno).then(function (data){
            domicilioServices.domicilioPut(data);
            $scope.domicilio = domicilioServices.domicilioFunction();
            $scope.carreras = carrerasServices.carrerasFunction();
            $scope.carrera = $scope.carreras.carrera;
          })
        })
      }             
    })
})
$scope.goBack = function () {
  $ionicHistory.goBack();
}
});