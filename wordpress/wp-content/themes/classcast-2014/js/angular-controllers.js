'use strict';

/**
* Home
*/

cc.controller('HomeCtrl', ['$scope', function($scope) {

	

}]);

/**
* Register
*/

cc.controller('RegisterCtrl', ['$scope', '$window', 'cc_customer', function($scope, $window, cc_customer) {

	// Packages
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

			var data = {
				country: $scope.country,
				email: $scope.email,
				name: $scope.name,
				password: $scope.password
			};

			// Create Customer
			cc_customer.apiCreateCustomer(data).then(function(response) {
				if(response.result == true) {
					$window.location.href = 'http://manage.classcast.co';

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
						scope.error = 'Oops! Something went wrong while submitting the form :(';
					}
				}

				if(submit_button) {
					submit_button.val(submit_button.data('original-value'));
					submit_button.prop('disabled', false);
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

}]);