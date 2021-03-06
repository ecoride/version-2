<?php namespace StartMeUp\Transformers;

use League\Fractal\TransformerAbstract;
use Illuminate\Database\Eloquent\Model;

class GenericNewTransformer extends TransformerAbstract
{
	/**
	 * @param Model $model
	 * @return array
	 */
	public function transform(Model $model)
	{
		return [
			'id' => $model->id,
		];
	}

}
