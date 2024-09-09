<?php

namespace App\Http\Controllers;

abstract class Controller
{

	/**
	 * Check if the if query is relationship
	 * @param string $query
	 * @return bool
	 */
	protected function checkRelationshipQuery($query)
	{
		return strpos($query, '.') !== false;
	}

	/**
	 * Make a where clause for relationship table. 
	 * Similliar to doing a join and making doing where clause
	 * @param \Illuminate\Database\Eloquent\Model $query
	 * @param array $filterItem
	 * @param int $index
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	protected function whereRelationship($query, $filterItem, $index)
	{
		$table = explode('.', $filterItem[0])[0];
		$column = $filterItem[0];
		$operator = $filterItem[1];
		$value = $filterItem[2];
		$query->whereHas($table, function ($q) use ($column, $operator, $value) {
			$q->where($column, $operator, $value);
		});

		return $query;
	}

	/**
	 * Do a where relationship for every relatioship filter
	 * @param \Illuminate\Database\Eloquent\Model $query
	 * @param array $filterItems
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	protected function loopWhereRelationship($query, $filterItems)
	{
		foreach ($filterItems as $index => $filterItem) {
			if ($this->checkRelationshipQuery($filterItem[0])) {
				$query = $this->whereRelationship($query, $filterItem, $index);
			}
		}
		return $query;
	}

	/**
	 * Remove all relationship filter from filter array
	 * @param array $filterItems
	 * @return array
	 */
	protected function clearWhereRelationship($filterItems)
	{
		foreach ($filterItems as $index => $filterItem) {
			if ($this->checkRelationshipQuery($filterItem[0])) {
				array_splice($filterItems, $index, 1);
			}
		}
		return $filterItems;
	}

	/**
	 * Execute every where clause from $filterItems to the given $query
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param array $filterItems
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	protected function completeWhere($query, $filterItems) {
		$query = $this->loopWhereRelationship($query, $filterItems);
		$filterItems = $this->clearWhereRelationship($filterItems);
		return $query->where($filterItems);
	}
}