<?php

namespace App\Filters;
use Illuminate\Http\Request;
use League\CommonMark\Node\Block\Document;

class Filter {

	/**
	*  The operator available for the query
	*  Right now it only have common operator, but can be easly extend
	*
	* @var array
	*/
	protected $operatorMap = [
		'eq' => '=',
		'lt' => '<',
		'gt' => '>',
		'like' => 'LIKE',
	];


	/**
	 * Map out what query parameter can be use with what operator.
	 *
	 * @var array
	 */
	protected $allowParameter;

	/**
	 * Map out query parameter to table column name
	 * @var array
	 */
	protected $columnMap;


	public function transform(Request $request)
	{
		$eloQuery = [];

		foreach ($this->allowParameter as $parameter => $operators) {
			$query = $request->query($parameter);

			if (!isset($query)) {
				continue;
			}

			
			$column = $this->columnMap[$parameter] ?? $parameter;


			foreach ($operators as $operator) {
				if (key_exists('like', $query)) {
					$likeOperator = '%' . $query[$operator] . '%'; 
				}

				if (isset($query[$operator])) {
					$eloQuery[] = [$column, $this->operatorMap[$operator], $likeOperator ?? $query[$operator]];
				}
			}
		}
		return $eloQuery;
	}
}