<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Formula extends Model implements Searchable
{
    protected $guarded = [];

    public function subtopics() {

        return $this->belongsTo(Subtopic::class);

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
