<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTargetsCheckboxTable extends Migration {

	const TABLE = 'targets_checkbox';

	const PK = 'id';

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

			// Data
			$table->date('deadline_date');
			$table->time('deadline_time');
			$table->boolean('deadline_reminder')
				->default(false);
			$table->timestamp('achieved_at')
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
