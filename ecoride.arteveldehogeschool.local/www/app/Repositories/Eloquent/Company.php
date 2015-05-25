<?php namespace StartMeUp\Repositories\Eloquent;

use StartMeUp\Models\Company as CompanyModel;
use StartMeUp\Contracts\Repositories\Company as CompanyContract;

class Company extends Repository implements CompanyContract {

	public function __construct(array $additionalInput = [])
	{
		$this->model = new CompanyModel();
		$this->query = $this->model->query();
		parent::__construct($additionalInput);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return CompanyModel::all();
	}

	public function applyFilters()
	{
		//
	}

}
