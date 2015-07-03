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
  .state('eventmenu.states', {
    url: "/states",
    views: {
      'menuContent' :{
        templateUrl: "pages/states.html",
        controller: "statesCtrl"
      }
    }
  })
  .state('eventmenu.payments', {
    url: "/payments",
    views: {
      'menuContent' :{
        templateUrl: "pages/payments.html",
        controller: "paymentsCtrl"
      }
    }
  })
  .state('eventmenu.claims', {
    url: "/claims",
    views: {
      'menuContent' :{
        templateUrl: "pages/claims.html",
        controller: "claimsCtrl"
      }
    }
  })
  $urlRouterProvider.otherwise("/event/home");
})
.controller('HomeCtrl', function($scope, LoginService, $ionicPopup, $state) {
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
.controller('MainCtrl', function($scope, $ionicSideMenuDelegate) {
  $scope.attendees = [
  { firstname: 'Nicolas', lastname: 'Cage' },
  { firstname: 'Jean-Claude', lastname: 'Van Damme' },
  { firstname: 'Keanu', lastname: 'Reeves' },
  { firstname: 'Steven', lastname: 'Seagal' }
  ];
  $scope.toggleLeft = function() {
    $ionicSideMenuDelegate.toggleLeft();
  };
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
    google.maps.event.addDomListener(window, 'load', function() {
      console.log("hola");
        var myLatlng = new google.maps.LatLng(37.3000, -120.4833);
 
        var mapOptions = {
            center: myLatlng,
            zoom: 16
        };
 
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);

        $scope.map = map;
  });


  });
    
    
    google.maps.event.addDomListener(window, 'load', function() {
      console.log("hola");
        var myLatlng = new google.maps.LatLng(37.3000, -120.4833);
 
        var mapOptions = {
            center: myLatlng,
            zoom: 16
        };
 
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);

        $scope.map = map;
  });

})
.controller('mapCtrl', function($scope,$ionicLoading){
  google.maps.event.addDomListener(window, 'load', function() {
        var myLatlng = new google.maps.LatLng(37.3000, -120.4833);
 
        var mapOptions = {
            center: myLatlng,
            zoom: 16
        };
 
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);

        $scope.map = map;
  });

})

.controller('aboutCtrl', function($scope,$cordovaInAppBrowser) {
})
.controller('optionsCtrl', function($scope) {
})
.controller('claimsCtrl', function($scope) {
})
.controller('paymentsCtrl', function($scope) {
})
.controller('statesCtrl', function($scope) {
});
