;(function () { 'use strict';

	angular.module('smuControllers')
		.controller('MainCtrl', MainCtrl);

	MainCtrl.$inject = [
		'$scope',
		'$timeout',
		'$mdBottomSheet'
	];

	function MainCtrl($scope, $timeout, $mdBottomSheet) {

		$scope.alert = '';
		$scope.showGridBottomSheet = function($event) {
			$scope.alert = '';
			$mdBottomSheet.show({
				templateUrl: 'templates/partials/bottom-sheet.html',
				controller: 'BottomSheetCtrl',
				targetEvent: $event
			}).then(function(clickedItem) {
				$scope.alert = clickedItem.name + ' clicked!';
			});
		};
		//$scope.showGridBottomSheet();
	}

})();
