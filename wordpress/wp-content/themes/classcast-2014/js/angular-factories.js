'use strict';

/**
* API
*/

cc.factory('cc_api', ['$http', 'cc_config', function($http, cc_config) {
	return {
		cc_apiRequest: function(endpoint, requestParams, callback) {
			var api = cc_config.environments[CC_ENVIRONMENT].api;
			var data = {
				headers: {
					ACCEPT: 'application/vnd.simplecue-v1+json',
					CUSTOMER: 'CCMNG',
					'USER-CUSTOMER': cc_config.customer
				},
				method: endpoint.type,
				timeout: 30 * 1000,
				url: api.protocol + '://' + api.host + '/' + endpoint.url
			};

			if(endpoint.type.toUpperCase() == 'GET' && requestParams) {
		      data.url += '?' + $.param(requestParams);
		    } else if(requestParams) {
		      data.data = requestParams;
			}

			$http(data).success(function(response) {
				callback(response);
			}).error(function(response) {
				callback(response);
			});
		}
	}
}]);

/**
* Authentication
*/

cc.factory('cc_authentication', ['$q', 'cc_api', function($q, cc_api) {
	var apiEndPoints = {
		authenticate: {
			type: 'POST',
			url: 'auth/manage/login'
		}
	}

	return {
		apiAuthenticate: function(data) {
			var defer = $q.defer();

			cc_api.cc_apiRequest(apiEndPoints.authenticate, data, function(response) {
				if(response.result) {
					defer.resolve(response);
				} else {
					defer.reject(response)
				}
			});

			return defer.promise;
		}
	}
}]);

/**
* Config
*/

cc.factory('cc_config', [function() {
	return {
		environments: {
			DEVELOPMENT: {
				api: {
					host: 'development-api.simplecue.com/api',
					protocol: 'https'
				}
			},

			PRODUCTION: {
				api: {
					host: 'staging.classcast.co/api',
					protocol: 'https'
				}
			},

			STAGING: {
				api: {
					host: 'www.classcast.co/api',
					protocol: 'https'
				}
			}
		}
	}
}]);

/**
* Customer
*/

cc.factory('cc_customer', ['$q', 'cc_api', function($q, cc_api) {
	var apiEndPoints = {
		create_customer: {
			type: 'POST',
			url: 'customer/registration'
		}
	};

	return {
		apiCreateCustomer: function(data) {
			var defer = $q.defer();

			cc_api.cc_apiRequest(apiEndPoints.create_customer, data, function(response) {
				defer.resolve(response);
			}, function(response) {
				defer.reject(response);
			});

			return defer.promise;
		}
	}
}]);

/**
* Data
*/

cc.factory('cc_data', ['$q', 'cc_api', function($q, cc_api) {
	var apiEndPoints = {
		get_registration_countries: {
			type: 'GET',
			url: 'registration/countries'
		}
	};

	return {
		/**
		* GET registration countries
		*/
		apiGetRegistrationCountries: function(data) {
			var defer = $q.defer();

			cc_api.cc_apiRequest(apiEndPoints.get_registration_countries, null, function(response) {
				defer.resolve(response);
			}, function(response) {
				defer.reject(response);
			});

			return defer.promise;
		}
	}
}]);