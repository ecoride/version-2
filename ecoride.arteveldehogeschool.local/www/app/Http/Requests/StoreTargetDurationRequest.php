<?php namespace StartMeUp\Http\Requests;

use StartMeUp\Http\Requests\Request;
use StartMeUp\Models\TargetDuration;

class StoreTargetDurationRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
//		return false;
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'time_estimated' => 'required',
			'time_increment' => 'required|in:' . implode(',', TargetDuration::TIME_INCREMENTS),
		];
	}

}
