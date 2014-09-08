'use strict';

var cc = angular.module('cc', ['ngRoute']);

cc.config(['$locationProvider', '$routeProvider', function($locationProvider, $routeProvider) {
	$locationProvider.html5Mode(true);

	$routeProvider
	// Home
	.when('/', {
		controller: 'HomeCtrl',
		templateUrl: '/wordpress/wp-content/themes/classcast-2014/js/partials/home.html'
	})

	// Register
	.when('/register', {
		controller: 'RegisterCtrl',
		templateUrl: '/wordpress/wp-content/themes/classcast-2014/js/partials/register.html'
	})

	// Default page
	.otherwise({
		redirectTo: '/'
	})
}]);