<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Subtopic extends Model implements Searchable
{
    protected $guarded = [];

    public function topics() {

        return $this->belongsTo(Topic::class);

    }

    public function formulas() {
        return $this->hasMany(Formula::class);
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('subtopic.show', $this->id);

        return new SearchResult(
            $this,
            $this->name,
            $url
         );
    }
}
