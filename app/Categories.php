<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $guarded = [];

    public function topics() {
        return $this->hasMany(Topic::class);
    }

    // public function getRouteKeyName() {
    //     return 'name'; //this will return user name as route
    // }
}
