;(function () {
	'use strict';

	angular.module('smuDirectives')
		.directive('smuMatchModel', smuMatchModel);

	smuMatchModel.$inject = [
		'$log',
		'$parse'
	];

	function smuMatchModel($log, $parse) {

		return {
			require: '^ngModel', // ngModel is required
			restrict: 'A',       // Attribute directive only
			link: function (scope, element, attrs, NgModelController) {

				var targetFunction = $parse(attrs.smuMatchModel);
				function targetValue() {
					return targetFunction(scope);
				}

				// Add new validator
				NgModelController.$validators.smuMatchModel = function () {
					return NgModelController.$viewValue === targetValue();
				};

				// Run all validators when targetValue changes.
				scope.$watch(targetValue, function () {
					NgModelController.$$parseAndValidate();
				});

			}

		};

	}

})();
