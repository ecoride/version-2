;(function () { 'use strict';

	angular.module('smuControllers')
		.controller('GoalsStatisticsCtrl', GoalsStatisticsCtrl);

	GoalsStatisticsCtrl.$inject = [
		'$routeParams',
		'$scope',
		'configChart'
	];

	function GoalsStatisticsCtrl($routeParams, $scope, configChart) {

		$scope.categoryId = $routeParams.categoryId;
		$scope.goalId     = $routeParams.goalId;

		var ctx = document.getElementById("smu-chart-0").getContext("2d");

		var data = {
			labels: ["January", "February", "March", "April", "May", "June", "July"],
			datasets: [
				{
					label: "My First dataset",
					fillColor: "rgba(220,220,220,0.5)",
					strokeColor: "rgba(220,220,220,0.8)",
					highlightFill: "rgba(220,220,220,0.75)",
					highlightStroke: "rgba(220,220,220,1)",
					data: [12, 10, 11, 9, 5, 3, 2]
				}
			]
		};

		var smuChart0 = new Chart(ctx).Bar(data, configChart.bar);

	}

})();
