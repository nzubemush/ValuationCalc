<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formula extends Model
{
    protected $guarded = [];

    public function subtopics() {

        return $this->belongsTo(Subtopic::class);

    }
    
}
