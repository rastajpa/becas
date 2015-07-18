angular.module('becas.controllers', ['ionic','ngCordova'])
.config(function($stateProvider, $urlRouterProvider) {
  $stateProvider
  .state('eventmenu', {
    url: "/event",
    abstract: true,
    templateUrl: "pages/menu.html"
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
  .state('eventmenu.map', {
    url: "/map",
    views: {
      'menuContent' :{
        templateUrl: "pages/map.html",
        controller: "mapCtrl"
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
.controller('MainCtrl', function($scope, $ionicSideMenuDelegate,$ionicNavBarDelegate,$ionicHistory) {
  $scope.attendees = [
  { firstname: 'Nicolas', lastname: 'Cage' },
  { firstname: 'Jean-Claude', lastname: 'Van Damme' },
  { firstname: 'Keanu', lastname: 'Reeves' },
  { firstname: 'Steven', lastname: 'Seagal' }
  ];
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
.controller('CheckinCtrl', function($scope) {
  $scope.showForm = true;  
  $scope.shirtSizes = [
  { text: 'Large', value: 'L' },
  { text: 'Medium', value: 'M' },
  { text: 'Small', value: 'S' }
  ];
  $scope.attendee = {};
  $scope.submit = function() {
    if(!$scope.attendee.firstname) {
      alert('Info required');
      return;
    }
    $scope.showForm = false;
    $scope.attendees.push($scope.attendee);
  };
})
.controller('AttendeesCtrl', function($scope) { 
  $scope.activity = [];
  $scope.arrivedChange = function(attendee) {
    var msg = attendee.firstname + ' ' + attendee.lastname;
    msg += (!attendee.arrived ? ' has arrived, ' : ' just left, '); 
    msg += new Date().getMilliseconds();
    $scope.activity.push(msg);
    if($scope.activity.length > 3) {
      $scope.activity.splice(0, 1);
    }
  };  
})
.controller('newsCtrl', function($scope,$ionicSideMenuDelegate) {
})
.controller('aboutCtrl', function($scope,$ionicModal,$ionicLoading) {
  $ionicModal.fromTemplateUrl('pages/map.html', {
    scope: $scope
  }).then(function(modal) {
    $scope.modal = modal;

})

    var map_options = {
        center: new google.maps.LatLng(-6.21, 106.84),
        zoom: 11,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("map"), map_options);

    $scope.map = map;

})
.controller('mapCtrl', function($scope,$ionicLoading,$compile){

    var map_options = {
        center: new google.maps.LatLng(-6.21, 106.84),
        zoom: 11,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("map"), map_options);


    google.maps.event.addListener(map, "click", function(event)
    {
        marker.setPosition(event.latLng);
    });
 $scope.map = map;


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
.controller('paymentsCtrl', function($scope,$ionicHistory) {
//   $ionicHistory.nextViewOptions({
//   disableAnimate: true,
//   disableBack: true
// });

})
.controller('statesCtrl', function($scope,$ionicHistory) {
//   $ionicHistory.nextViewOptions({
//   disableAnimate: true,
//   disableBack: true
// });
});
