'use strict';

/**
* Home
*/

cc.controller('HomeCtrl', ['$scope', function($scope) {

	

}]);

/**
* Register
*/

cc.controller('RegisterCtrl', ['$scope', function($scope) {

	// Packages
	$scope.packages = [
		{
			id: 1,
			name: 'Starter'
		},

		{
			id: 2,
			name: 'Grow'
		},

		{
			id: 3,
			name: 'Max'
		},

		{
			id: 4,
			name: 'Enterprise'
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

			data = {
				company: $scope.company,
				email: $scope.email,
				first_name: $scope.first_name,
				last_name: $scope.last_name,
				package: $scope.package,
				phone: $scope.phone
			};

			## Create Customer
			cc_customer.apiCreateCustomer(data).then(function(response) {
				if(response.result == true) {
					$location.path('/users/' + response.user.id);

				} else {
					if(response.errors?.length) {
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