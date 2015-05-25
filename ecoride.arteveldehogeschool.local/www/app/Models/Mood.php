<?php namespace StartMeUp\Models;

use Illuminate\Database\Eloquent\Model;

class Mood extends Model {

	const FEELING_ENERGIZED = 'ENERGIZED';
	const FEELING_EXHAUSTED = 'EXHAUSTED';
	const FEELING_GOOD      = 'GOOD';
	const FEELING_OK        = 'OK';
	const FEELING_TIRED     = 'TIRED';
	const FEELINGS = [
		self::FEELING_ENERGIZED,
		self::FEELING_GOOD,
		self::FEELING_OK,
		self::FEELING_TIRED,
		self::FEELING_EXHAUSTED,
	];

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'feeling',
	];

	/**
	 * Many-to-One
	 *
	 * @link http://laravel.com/docs/5.0/eloquent#one-to-many
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo('StartMeUp\User');
	}

}
