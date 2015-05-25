;(function () { 'use strict';

	angular.module('smuControllers')
		.controller('GoalsCtrl', GoalsCtrl);

	GoalsCtrl.$inject = [
		'$filter',
		'$location',
		'$log',
		'$rootScope',
		'$routeParams',
		'$scope',
		'incrementTypes',
		'repeatTypes',
		'targetTypes',
		'GoalResourceFactory',
		'UserCategoryResourceFactory'
	];

	function GoalsCtrl(
		$filter,
		$location,
		$log,
		$rootScope,
		$routeParams,
		$scope,
		incrementTypes,
		repeatTypes,
		targetTypes,
		GoalResourceFactory,
		UserCategoryResourceFactory
	) {
		// ViewModel
		var vm = this;

		$log.info('routeParams: ', $routeParams);
		vm.categoryId = $routeParams.categoryId;
		vm.goalId     = $routeParams.goalId;

		vm.ui = {
			incrementTypes: incrementTypes,
			repeatTypes: repeatTypes,
			targetTypes: targetTypes,
			goal: {
				achieved: false,
				duration: null
			}
		};

		//var now = new Date();
		//
		//vm.now = {
		//	date: now.getFullYear() + '-' + now.getMonth()   + '-' + now.getDate(),
		//	time: now.getHours()    + ':' + now.getMinutes()
		//};

		vm.categories = [];
		vm.goal = {
			target: {
				time_increment: vm.ui.incrementTypes.a.value
			}
		};

		$scope.$watch('vm.goal.target.time_estimated', function (newValue, oldValue) {
			if (newValue) {
				var time_increment = _.find(vm.ui.incrementTypes, function (incrementType) {
					return incrementType.value === vm.goal.target.time_increment;
				})

				var minutes = vm.goal.target.time_estimated * time_increment.minutes;
				var duration = moment.duration(minutes, 'minutes');

				moment.locale('en');

				if (minutes < 60) {
					duration  = duration.asMinutes() + ' minutes';
				} else if (minutes < 480) {
					duration  = duration.asHours();
					duration += (duration === 1) ? ' hour' : ' hours';
				} else {
					duration = (duration.asDays() === 1) ? duration.asDays() + ' day' : $filter('number')(duration.asDays(), 2) + ' days';
				}

				vm.ui.goal.duration = duration;
			}

		});

		UserCategoryResourceFactory.queryWithGoals({ userId: 1, 'sort[order]': 'asc' }).
			$promise.then(
			// Success
			function (response) {
				vm.categories = response.data;
				$log.info('data: ', vm.categories);

				if (typeof vm.categoryId != 'undefined' && typeof vm.goalId != 'undefined') {

					var goals = _.result(
						_.find(vm.categories, function (category) {
							return category.id == vm.categoryId;
						}),
						'goals'
					);

					vm.goal = _.find(goals, function (goal) {
						return goal.id == vm.goalId;
					});
					$log.info('goal loaded: ', vm.goal);

					if (typeof vm.goal.target.achieved_at != 'undefined') {
						vm.achieved = (vm.goal.target.achieved_at !== null);
						console.log('achieved_at: ', vm.goal.target.achieved_at, typeof vm.goal.target.achieved_at);
						$scope.$watch('vm.achieved', function (newValue, oldValue) {
							if (newValue) {
								if (vm.goal.target.achieved_at === null) {
									vm.goal.target.achieved_at = new Date();
								}
							} else {
								vm.goal.target.achieved_at = null;
							}
						});
					}

					vm.time_incrementation = 0;
					$scope.$watch('vm.time_incrementation', function (newValue, oldValue) {
						var minutes = vm.goal.target.time_increment * vm.time_incrementation;
						var duration = moment.duration(minutes, 'minutes');

						moment.locale('en');

						if (minutes < 60) {
							duration  = duration.asMinutes() + ' minutes';
						} else if (minutes < 240) {
							duration  = duration.asHours();
							duration += (duration === 1) ? ' hour' : ' hours';
						} else {
							duration = (duration.asDays() === 1) ? duration.asDays() + ' day' : $filter('number')(duration.asDays(), 2) + ' days';
						}

						//vm.ui.goal.duration = duration;
					});


				}

			},
			// Error
			function (reason) {
				$log.error(reason);
			}
		);

		vm.isTypeCheckbox          = isTypeCheckbox;
		vm.isTypeRecurringCheckbox = isTypeRecurringCheckbox;
		vm.isTypeDuration          = isTypeDuration;

		vm.increment = timeIncrement;
		vm.decrement = timeDecrement;

		vm.goalCreate   = goalCreate;
		vm.goalEdit     = goalEdit;
		vm.updateCreate = updateCreate;

		// Functions
		// ---------

		function isTypeCheckbox(targetClass) {
			return targetClass === targetTypes.a.value;
		}

		function isTypeRecurringCheckbox(targetClass) {
			return targetClass === targetTypes.b.value;
		}

		function isTypeDuration(targetClass) {
			return targetClass === targetTypes.c.value;
		}

		function estimate(newValue, oldValue) {
			if (newValue) {
				var time_increment = _.find(vm.ui.incrementTypes, function (incrementType) {
					return incrementType.value === vm.goal.target.time_increment;
				})

				var minutes = vm.goal.target.time_estimated * time_increment.minutes;
				var duration = moment.duration(minutes, 'minutes');

				moment.locale('en');

				if (minutes < 60) {
					duration  = duration.asMinutes() + ' minutes';
				} else if (minutes < 480) {
					duration  = duration.asHours();
					duration += (duration === 1) ? ' hour' : ' hours';
				} else {
					duration = (duration.asDays() === 1) ? duration.asDays() + ' day' : $filter('number')(duration.asDays(), 2) + ' days';
				}

				vm.ui.goal.duration = duration;
			}
		}

		function goalCreate() {
			$log.info('goalCreate: ', vm.goal);

			vm.goal.user_id = 1;
			vm.goal.category_id = vm.categoryId;

			var goalResource = new GoalResourceFactory();

			goalResource.goal = vm.goal;
			goalResource.$save();
		}

		function goalEdit() {
			$log.info('goalEdit: ', vm.goal);
		}

		function timeDecrement() {
			var min = 0;
			if (min < vm.time_incrementation) {
				vm.time_incrementation--;
			} else {
				vm.time_incrementation = min;
			}
		}

		function timeIncrement() {
			var max = 200;
			if (vm.time_incrementation < max) {
				vm.time_incrementation++;
			} else {
				vm.time_incrementation = max;
			}
		}

		function updateCreate() {
			$log.info('updateCreate: ', vm.goal);
		}

	}

})();
