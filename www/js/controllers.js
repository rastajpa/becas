angular.module('becas.controllers', ['ionic','ngCordova'])
.config(function($stateProvider, $urlRouterProvider) {
  $stateProvider
  .state('eventmenu', {
    url: "/event",
    abstract: true,
    templateUrl: "pages/menu.html",
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
.controller('HomeCtrl', function($scope, LoginService, $ionicPopup, $state,$ionicHistory) {
    $scope.data = {};
    $scope.login = function() {
        LoginService.loginUser($scope.data.email, $scope.data.password).success(function(data) {
            $state.go('eventmenu.options');
        }).error(function(data) {
            var alertPopup = $ionicPopup.alert({
                title: 'Falló el ingreso!',
                template: 'Por favor revise sus datos!'
            });
        });
    }
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
.controller('aboutCtrl', function($scope,$ionicModal,$ionicLoading) {
  $ionicModal.fromTemplateUrl('pages/map.html', {
    scope: $scope
  }).then(function(modal) {
    $scope.modal = modal;
})

  $scope.openModal = function () {
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
   

})

.controller('optionsCtrl', function($scope,$ionicHistory,$ionicSlideBoxDelegate) {
//  $ionicHistory.nextViewOptions({
//   disableAnimate: false,
//   disableBack: false
// });

})
.controller('claimsCtrl', function($scope,$ionicHistory) {
  /*$ionicHistory.nextViewOptions({
  disableAnimate: true,
  disableBack: true
});*/

})
.controller('paymentsCtrl', function($scope,$ionicHistory,$q,$http) {
})
.controller('statesCtrl', function($scope,$ionicHistory,$q,$http) {
var session = $q.defer();
session.promise.then(userSession);
var hola = $http.get('http://localhost/becas/web/evaluacion')
.success(function(data,status, headers,config){
session.resolve(data);
})
.error(function(data,status,headers,config){
});
function userSession(data){
  //hay que hacer control para el documento
  if(data[1].causa1== null && data[1].causa2== null &&
  data[1].causa3== null && data[1].causa4== null &&
  data[1].comentarioE== ''){
    var session = $q.defer();
    session.promise.then(userSession2);
    var hola = $http.get('http://localhost/becas/web/alumnos')
.success(function(data,status, headers,config){
session.resolve(data);
})
.error(function(data,status,headers,config){
});
  function userSession2(data2){
  if(data2[0].becario==1){
    console.log("hola");
    //muestra RENOVANTE
    $scope.state = "RENOVANTE";
    //muestra PUNTAJE
    $scope.score = "Entero que muestra el puntaje";
  }
  if(data2[0].becario==0){
    //muestra APROBADO
     $scope.state = "APROBADO";
    //muestra PUNTAJE
    $scope.score = "Entero que muestra el puntaje";
  }
  }
  }
  else{
  //muestra FUERA DE CONCURSO
  $scope.state = "FUERA DE CONCURSO";
  //muestra causa1
  $scope.cause1 = data[1].causa1;
  //muestra causa2
  $scope.cause1 = data[1].causa2;
  //muestra causa3
    $scope.cause1 = data[1].causa3;
  //muestra causa4
    $scope.cause1 = data[1].causa4;
  //muestra data[1].comentarioE
    $scope.commentE = data[1].comentarioE;
  }
}
})
.controller('userCtrl', function($scope,$ionicHistory,$ionicNavBarDelegate) {
  console.log("hola");
 $ionicNavBarDelegate.showBackButton();
  $scope.myGoBack = function() {
    $ionicHistory.goBack();
  };
});

