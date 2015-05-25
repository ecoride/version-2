<?php namespace StartMeUp\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TargetRecurringCheckbox extends Model {

	use SoftDeletes;

	const REPEAT_DAILY       = 'DAILY';
	const REPEAT_FORTNIGHTLY = 'FORTNIGHTLY';
	const REPEAT_MONTHLY     = 'MONTHLY';
	const REPEAT_WEEKLY      = 'WEEKLY';
	const REPEATS = [
		self::REPEAT_DAILY,
		self::REPEAT_WEEKLY,
		self::REPEAT_FORTNIGHTLY,
		self::REPEAT_MONTHLY,
	];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = \CreateTargetsRecurringCheckboxTable::TABLE;

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
		'repeat_deadline',
		'repeat_until_date',
		'repeat_until_time',
	];

	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	protected $dates = [];

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
	 * One-to-Many
	 *
	 * @link http://laravel.com/docs/5.0/eloquent#one-to-many
	 * @return mixed
	 */
	public function updates()
	{
		return $this->hasMany('StartMeUp\Models\UpdateRecurringCheckbox', \CreateTargetsRecurringCheckboxTable::FK);
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
