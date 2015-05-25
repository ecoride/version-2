;(function () { 'use strict';

	angular.module('smuControllers')
		.controller('LeftCtrl', LeftCtrl);

	LeftCtrl.$inject = [
		'$log',
		'$scope',
		'$timeout',
		'$mdSidenav'
	];

	function LeftCtrl($log, $scope, $timeout, $mdSidenav) {

		$scope.close = function() {
			$mdSidenav('left').close()
				.then(function(){
					$log.debug("close LEFT is done");
				});
		};

	}

})();
