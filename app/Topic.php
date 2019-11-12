<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Topic extends Model implements Searchable
{
    protected $guarded = [];

    public function categories() {

        return $this->belongsTo(Categories::class);

    }

    public function subtopics() {
        return $this->hasMany(Subtopic::class);
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('topic.show', $this->id);

        return new SearchResult(
            $this,
            $this->name,
            $url
         );
    }
}
