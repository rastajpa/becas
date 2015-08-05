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

    .controller('MenuCtrl', function($scope,$q,$http, $ionicPopup, $state,$ionicHistory) {
    })
 
  .controller('HomeCtrl', function($scope,loginServices,$ionicLoading) {
      $scope.data = {};
       $scope.login = function (){
        $ionicLoading.show({
        content: 'Loading',
        animation: 'fade-in',
        showBackdrop: true,
        maxWidth: 200,
        showDelay: 0
      });
       loginServices.login($scope.data.email,$scope.data.password);
    }
    //$ionicLoading.hide();
  })
  .controller('MainCtrl', function($scope, $ionicSideMenuDelegate,$ionicNavBarDelegate,$ionicHistory,$ionicPopover) {

  // .fromTemplateUrl() method
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
  //Cleanup the popover when we're done with it!
  $scope.$on('$destroy', function() {
    $scope.popover.remove();
  });
  // Execute action on hide popover
  $scope.$on('popover.hidden', function() {
  // Execute action
});
  // Execute action on remove popover
  $scope.$on('popover.removed', function() {
  // Execute action
});
  $scope.toggleLeft = function() {
    $ionicSideMenuDelegate.toggleLeft();
  };
  $ionicHistory.nextViewOptions({
    disableAnimate: true,
    disableBack: true
  });

  /*$ionicNavBarDelegate.showBackButton();
  $ionicHistory.goBack();*/
})
  .controller('newsCtrl', function($scope,$ionicSideMenuDelegate) {
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
   // is available
      }, function () {
   // not available
      alert("No puede usar este servicio debido a que su disposivo no lo soporta. Por favor realice el reclamo a becascomunic@gmail.com")
      });

      var email = {
        to: 'becascomunic@gmail.com',
        isHtml: true
      };

      $cordovaEmailComposer.open(email).then(null, function () {
   // user cancelled email
      });
    }


  })

  .controller('optionsCtrl', function($scope,$ionicHistory,$ionicSlideBoxDelegate) {
   
})

  .controller('claimsCtrl', function($scope,$ionicHistory, $cordovaEmailComposer, $q, $http,alumnosServices,loginServices,carrerasServices,domicilioServices) {
    
    $scope.login = loginServices.loginFunction();
    $scope.email = $scope.login.email;
    $scope.dni = $scope.login.usuario;
    console.log("loginServices");
    console.log($scope.login);
    console.log($scope.email);
    console.log($scope.dni);


    alumnosServices.alumnos($scope.dni);
    $scope.alumnos = alumnosServices.alumnosFunction();
    $scope.Apellido = $scope.alumnos.apellido;
    $scope.Nombre = $scope.alumnos.nombre;
    console.log("alumnosServices");
    console.log($scope.alumnos);
    console.log($scope.Apellido);
    console.log($scope.Nombre);

    carrerasServices.carreras($scope.alumnos.idcarrera);
    $scope.carreras = carrerasServices.carrerasFunction();
    console.log("carrerasServices");
    console.log($scope.carreras);
    
    domicilioServices.domicilio($scope.alumnos.idalumno);
    $scope.domicilio = domicilioServices.domicilioFunction();
    $scope.Telefono = $scope.domicilio.telefono;
    console.log("domicilioServices");
     console.log($scope.domicilio);
      console.log($scope.Telefono);
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
          $scope.motivos = $scope.motivos + $scope.itemArray[i] + '\n'
        };
     
        $http.get('http://localhost/becas/web/alumnos?AlumnosSearch[dni]='+$stateParams.dni)

          $cordovaEmailComposer.isAvailable().then(function() {
       // is available
          }, function () {
       // not available
            alert("No puede usar este servicio debido a que su disposivo no lo soporta. Por favor realice el reclamo a becascomunic@gmail.com")
          });

          var email = {
            to: 'becascomunic@gmail.com',
            subject: 'Reclamos',
            body: "Apellido y Nombre:" + $scope.Apellido + '' + $scope.Nombre + '<br>' +
                  "DNI:" + $scope.dni + '<br>' +
                  "Carrera o Escuela:" + $scope.carreras + '<br>' +
                  "Teléfono:" + $scope.Telefono + '<br>' +
                  "Email:" + $scope.email + '<br>' +
                  "Motivo/s: " + $scope.motivos + '<br>' + 
                  "Otro motivo:" + $scope.mot.otros,
            isHtml: true
          };

          $cordovaEmailComposer.open(email).then(null, function () {
          // user cancelled email
          });
   }
})
  .controller('paymentsCtrl', function($scope,$ionicHistory,$q,$http) {
  })
  .controller('statesCtrl', function($scope,$ionicHistory,$q,$http,loginServices,evaluacionServices,alumnosServices) {
    
    $scope.login = loginServices.loginFunction();

    evaluacionServices.evaluacion($scope.login.usuario);
   
    $scope.evaluacion = evaluacionServices.evaluacionFunction();

  if($scope.evaluacion.causa1== null && $scope.evaluacion.causa2== null &&
    $scope.evaluacion.causa3== null && $scope.evaluacion.causa4== null &&
    $scope.evaluacion.comentarioE== ''){

    alumnosServices.alumnos($scope.alumno.usuario);

  $scope.alumnos = alumnosServices.alumnosFunction();
    
  if($scope.alumnos.becario==1){
  //muestra RENOVANTE
  $scope.state = "RENOVANTE";
  //muestra PUNTAJE
  $scope.score = "Entero que muestra el puntaje";
}
if($scope.alumnos.becario==0){
  //muestra APROBADO
  $scope.state = "APROBADO";
  //muestra PUNTAJE
  $scope.score = "Entero que muestra el puntaje";
}
}
else{
  //muestra FUERA DE CONCURSO
  $scope.state = "FUERA DE CONCURSO";
  //muestra causa1
  $scope.cause1 = $scope.evaluacion.causa1;
  //muestra causa2
  $scope.cause1 = $scope.evaluacion.causa2;
  //muestra causa3
  $scope.cause1 = $scope.evaluacion.causa3;
  //muestra causa4
  $scope.cause1 = $scope.evaluacion.causa4;
  //muestra data[1].comentarioE
  $scope.commentE = $scope.evaluacion.comentarioE;
}
})
  .controller('userCtrl', function($scope,$ionicHistory,$ionicNavBarDelegate) {
    
    $scope.login = loginServices.loginFunction();
    alumnosServices.alumnos($scope.login.usuario);
    $scope.alumnos = alumnosServices.alumnosFunction();
    $scope.Apellido = $scope.alumnos.apellido;
    $scope.Nombre = $scope.alumnos.nombre;

    $ionicNavBarDelegate.showBackButton();
    $scope.myGoBack = function() {
      $ionicHistory.goBack();
    };
  });

