<?php
namespace App\QueryFilters;
use Closure;

abstract class Filter
{
	public function handle($request, Closure $next)
	{
		if(!request()->has($this->filterName())) {
			return $next($request);
		}

		$builder = $next($request);

		return $builder->orderBy('title', request('sort'));
	} 

	protected function applyFilter($builder);

	protected function filterName()
	{
		return Str::snake(class_basename($this));
	}
}