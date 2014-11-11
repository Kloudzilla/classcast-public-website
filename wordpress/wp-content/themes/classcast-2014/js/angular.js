'use strict';

var cc = angular.module('cc', ['ngRoute']);

cc.config(['$locationProvider', '$routeProvider', function($locationProvider, $routeProvider) {
	$locationProvider.html5Mode(true);

	$routeProvider
	// Register
	.when('/register', {
		controller: 'RegisterCtrl',
		templateUrl: '/wordpress/wp-content/themes/classcast-2014/js/partials/register.html'
	})

	// Default page
	.otherwise({
		redirectTo: function(routeParams, path, search) {
			// Most likely a page outside of the Angular app
        	window.location = path;
    	}
	})
}]);