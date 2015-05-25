<?php namespace StartMeUp\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UpdateDuration extends Model {

	use SoftDeletes;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = \CreateUpdatesDurationTable::TABLE;

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'created_at',
		'updated_at',
	];

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'time_incrementation',
	];

	/**
	 * Many-to-One
	 *
	 * @link http://laravel.com/docs/5.0/eloquent#one-to-many
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function target()
	{
		return $this->belongsTo('StartMeUp\Model\TargetDuration', \CreateTargetsDurationTable::FK);
	}
}
