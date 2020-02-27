<?php

namespace App\QueryFilters;
use Closure;

class Sort extends Filter
{
	protected function applyFilter($builder)
	{
		return $builder->orderBy('title', request($this->filterName()));
	}
}