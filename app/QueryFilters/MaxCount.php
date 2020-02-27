<?php

namespace App\QueryFilters;
use Closure;

class MaxCount extends Filter
{
	protected function applyFilter($builder)
	{
		return $builder->take(request($this->filterName()));
	}
}