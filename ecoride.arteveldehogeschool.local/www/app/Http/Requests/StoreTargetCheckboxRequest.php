<?php namespace StartMeUp\Http\Requests;

use StartMeUp\Http\Requests\Request;

class StoreTargetCheckboxRequest extends Request {

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
			'deadline_date' => 'required',
			'deadline_time' => 'required',
		];
	}

}
