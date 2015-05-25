<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use StartMeUp\Models\TargetRecurringCheckbox;

class CreateTargetsRecurringCheckboxTable extends Migration {

	const TABLE = 'targets_recurring_checkbox';

	const PK = 'id';

	const FK = 'target_id';

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(self::TABLE, function(Blueprint $table)
		{
			// Meta Data
			$table->increments(self::PK);
			$table->timestamps();  // 'created_at', 'updated_at'
			$table->softDeletes(); // 'deleted_at'

			// Foreign Keys

			// Data
			$table->date('deadline_date');
			$table->time('deadline_time');
			$table->boolean('deadline_reminder')
				->default(false);
			$table->enum('repeat_deadline', TargetRecurringCheckbox::REPEATS)
				->nullable();
			$table->dateTime('repeat_until_date')
				->nullable();
			$table->dateTime('repeat_until_time')
				->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(self::TABLE);
	}

}
