<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class PostScope implements Scope
{

    // php artisan make:scope TestScope   <====   for create scope 
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model): void
    {
        // we make global scope, we can run any time for retrieve same data
        $builder->where('is_publish', 1);
    }
}
