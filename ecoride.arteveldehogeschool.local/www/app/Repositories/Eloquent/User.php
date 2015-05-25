<?php namespace StartMeUp\Repositories\Eloquent;

use StartMeUp\Contracts\Repositories\User as UserContract;
use StartMeUp\User as UserModel;

class User extends Repository implements UserContract {

	protected $filtersValid = [];

	protected $includesValid = [];

	protected $sortsValid = [
		'id',
		'name',
	];

	public function __construct(array $additionalInput = [])
	{
		$this->model = new UserModel();
		$this->query = $this->model->query();
		parent::__construct($additionalInput);
	}

	public function applyFilters()
	{
		//
	}

}
