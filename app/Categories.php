<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\SearchResult;
use Spatie\Searchable\Searchable;

class Categories extends Model implements Searchable
{
    protected $guarded = [];

    public function topics() {
        return $this->hasMany(Topic::class);
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('categories.show', $this->id);

        return new SearchResult(
            $this,
            $this->name,
            $url
         );
    }

    // public function getRouteKeyName() {
    //     return 'name'; //this will return user name as route
    // }
}
