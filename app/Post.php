<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class Post extends Model
{
    protected $guraded = [];

    public static function allPost()
    {
    	return app(Pipeline::class)
    		->send(Post::query())
    		->throught([
    			\App\QueryFilters\Active:class,
    			\App\QueryFilters\Sort:class,
    			\App\QueryFilters\MaxCount:class,
    		])
    		->thenReturn()
    		->paginate(10);
    }
}
