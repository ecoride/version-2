;(function () { 'use strict';

	angular.module('smuControllers')
		.controller('BottomSheetCtrl', BottomSheetCtrl);

	BottomSheetCtrl.$inject = [
		'$scope',
		'$mdBottomSheet'
	];

	function BottomSheetCtrl($scope, $mdBottomSheet) {

		$scope.items = [
			{ name: 'Hangout', icon: 'hangout' },
			{ name: 'Mail', icon: 'mail' },
			{ name: 'Message', icon: 'message' },
			{ name: 'Copy', icon: 'copy' },
			{ name: 'Facebook', icon: 'facebook' },
			{ name: 'Twitter', icon: 'twitter' },
		];
		$scope.listItemClick = function($index) {
			var clickedItem = $scope.items[$index];
			//$mdBottomSheet.hide(clickedItem);
		};

	}

})();
