<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use StartMeUp\Models\TargetDuration;

class CreateTargetsDurationTable extends Migration {

	const TABLE = 'targets_duration';

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
			$table->smallInteger('time_estimated') // Multiplied by time_increment (in minutes).
				->unsigned();
			$table->enum('time_increment', TargetDuration::TIME_INCREMENTS);
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
