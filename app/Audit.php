<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\CurrentScope;

class Audit extends Model
{
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new CurrentScope);
    }
}
