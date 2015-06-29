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
        controller: "homeCtrl"
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
  $urlRouterProvider.otherwise("/event/home");
})
.controller('homeCtrl', function($scope,$ionicSideMenuDelegate) {
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
.controller('aboutCtrl', function($scope,$ionicSideMenuDelegate) {
});
