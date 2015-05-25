<?php

use Carbon\Carbon;
use StartMeUp\Models\TargetCheckbox;
use StartMeUp\Models\TargetRecurringCheckbox;
use StartMeUp\Models\TargetDuration;
use StartMeUp\Models\UpdateRecurringCheckbox;
use StartMeUp\Models\UpdateDuration;

class TargetableUpdateTableSeeder extends StartMeUpSeeder {

	public function run()
	{
		$targetsCheckbox = TargetCheckbox::all();

		foreach ($targetsCheckbox as $target) {
			$dates = [
				Carbon::now()->addDay(-3),
				Carbon::now()->addDay(-2),
				Carbon::now()->addDay(-1),
				Carbon::now(),
			];
			$target->achieved_at = $this->faker->optional($weight = .75, $default = null)->randomElement($dates);
			$target->save();
		}

		$targetsRecurringCheckbox = TargetRecurringCheckbox::all();

		$iMax = 5;

		foreach ($targetsRecurringCheckbox as $target) {
			$updates = [];
			for ($i = $iMax - 1; $i > 0; --$i) {
				$update = new UpdateRecurringCheckbox(['achieved_at' => Carbon::now()->addDay(-$i)]);
				array_push($updates, $update);
			}
			$target->updates()->saveMany($updates);
		}

		$targetsDuration = TargetDuration::all();

		foreach ($targetsDuration as $target) {
			$updates = [];
			for ($i = 0; $i < $iMax; ++$i) {
				$update = new UpdateDuration(['time_incrementation' => $this->faker->numberBetween($min = 1, $max = 96)]);
				array_push($updates, $update);
			}
			$target->updates()->saveMany($updates);
		}

	}

}
