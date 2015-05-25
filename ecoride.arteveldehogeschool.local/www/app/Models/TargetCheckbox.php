<?php namespace StartMeUp\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TargetCheckbox extends Model {

	use SoftDeletes;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = \CreateTargetsCheckboxTable::TABLE;

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'created_at',
		'updated_at',
		'deleted_at',
	];

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'deadline_date',
		'deadline_time',
		'deadline_reminder',
	];

	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	protected $dates = [
		'achieved_at',
	];

	/**
	 * Polymorphic One-to-One
	 *
	 * @link http://laravel.com/docs/5.0/eloquent#polymorphic-relations
	 * @return \Illuminate\Database\Eloquent\Relations\MorphOne
	 */
	public function goal()
	{
		return $this->morphOne('StartMeUp\Models\Goal', 'targetable');
	}

	/**
	 * @param $value
	 * @return bool
	 */
	public function getDeadlineReminderAttribute($value)
	{
		return (bool) $value;
	}
}
