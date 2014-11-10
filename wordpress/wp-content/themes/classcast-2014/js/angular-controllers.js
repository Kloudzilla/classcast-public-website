'use strict';

/**
* Home
*/

cc.controller('HomeCtrl', ['$scope', function($scope) {

	

}]);

/**
* Register
*/

cc.controller('RegisterCtrl', ['$scope', '$window', 'cc_authentication', 'cc_customer', function($scope, $window, cc_authentication, cc_customer) {

	// Countries
	$scope.countries = [
		{
			id: 'AU',
			name: 'Australia'
		},

		{
			id: 'US',
			name: 'United States'
		}
	];

	// Industries
	$scope.industries = [
		{
			id: 'education',
			name: 'Education'
		},

		{
			id: 'fitness',
			name: 'Fitness'
		}
	];

	// Pre-select country
	// $.get("http://ipinfo.io", function(response) {
	// 	ccUserInitialCountry = response.country;
	// 	$("#country").val(ccUserInitialCountry.toUpperCase());
	// }, "jsonp");

	// Submit Register Form
	$scope.submitRegisterForm = function(isValid) {
		$scope.registerSubmitted = true;

		if(isValid) {
			$scope.success = false;
			$scope.error = false;

			var submit_button = $('#submit');
			if(submit_button) {
				submit_button.data('original-value', submit_button.val());
				submit_button.val(submit_button.data('wait'));
				submit_button.prop('disabled', true);
			}

			var create_customer_data = {
				company_name: $scope.company_name,
				country: $scope.country,
				email: $scope.email,
				full_name: $scope.full_name,
				industry: $scope.industry,
				password: $scope.password
			};

			// Create Customer
			cc_customer.apiCreateCustomer(create_customer_data).then(function(response) {
				if(response.result == true) {
					// Attempt to login
					var authenticate_data = {
						email: $scope.email,
						password: $scope.password
					}

					cc_authentication.apiAuthenticate(authenticate_data).then(function(response) {
						if(response.result == true) {
							if(response.accounts.length == 1) {
								$scope.loginAsCustomer(response.accounts[0].id);
							}
						} else {
							if(response.user_msg) {
								$scope.error = response.user_msg;
							} else {
								$scope.error = 'Oops! Something went wrong while submitting the form :('
							}

							if(submit_button) {
								submit_button.val(submit_button.data('original-value'));
								submit_button.prop('disabled', false);
							}
						}
					}, function(response) {
						if(response.user_msg) {
							$scope.error = response.user_msg;
						} else {
							$scope.error = 'Oops! Something went wrong while submitting the form :(';
						}

						if(submit_button) {
							submit_button.val(submit_button.data('original-value'));
							submit_button.prop('disabled', false);
						}
					});
				} else {
					if(response.errors && response.errors.length) {
						$scope.error = '';
						errors_i = 0;
						errors_length = response.errors.length;
						while(errors_i < errors_length) {
							if(errors_i > 0) {
								$scope.error += '<br>';
							}

							$scope.error += response.errors[errors_i].field + ' - ' + response.errors[errors_i].messages[0].msg;
							errors_i++;
						}
					} else {
						$scope.error = 'Oops! Something went wrong while submitting the form :(';
					}

					if(submit_button) {
						submit_button.val(submit_button.data('original-value'));
						submit_button.prop('disabled', false);
					}
				}

			}, function(response) {
				if(response.user_msg) {
					$scope.error = response.user_msg;
				} else {
					$scope.error = 'Oops! Something went wrong while submitting the form :(';
				}

				if(submit_button) {
					submit_button.val(submit_button.data('original-value'))
					submit_button.prop('disabled', false)
				}
			});
		} else {
			$scope.error = 'Your form has errors, please review the fields above to ensure you have inserted all necessary fields.'
		}
	}

	// Login as customer
	$scope.loginAsCustomer = function(id) {
		var login_data = {
			customer_id: id,
			email: $scope.email,
			password: $scope.password
		};

		cc_authentication.apiAuthenticate(login_data).then(function(response) {
			if(response.result == true) {
				$.cookie('userID', response.user.id, {expires: 30, path: '/'});
      			$.cookie('userToken', response.user.token, {expires: 30, path: '/'});
      			$window.location.href = 'http://manage.classcast.co';
			} else {
				if(response.user_msg) {
					$scope.error = response.user_msg;
				} else {
					$scope.error = 'Oops! Something went wrong while trying to login :(';
				}
			}

		}, function(response) {
			if(response.user_msg) {
				$scope.error = response.user_msg;
			} else {
				$scope.error = 'Oops! Something went wrong while trying to login :(';
			}
		});
	}

}]);