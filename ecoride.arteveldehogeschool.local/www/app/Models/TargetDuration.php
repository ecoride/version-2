<?php namespace StartMeUp\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TargetDuration extends Model {

	use SoftDeletes;

	const TIME_INCREMENT_DAY          = 'DAY';
	const TIME_INCREMENT_HOUR         = 'HOUR';
	const TIME_INCREMENT_QUARTER_HOUR = 'QUARTER_HOUR';
	const TIME_INCREMENTS = [
		self::TIME_INCREMENT_QUARTER_HOUR,
		self::TIME_INCREMENT_HOUR,
		self::TIME_INCREMENT_DAY,
	];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = \CreateTargetsDurationTable::TABLE;

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
		'time_estimated',
		'time_increment',
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
	 * One-to-Many
	 *
	 * @link http://laravel.com/docs/5.0/eloquent#one-to-many
	 * @return mixed
	 */
	public function updates()
	{
		return $this->hasMany('StartMeUp\Models\UpdateDuration', \CreateTargetsDurationTable::FK);
	}
}
