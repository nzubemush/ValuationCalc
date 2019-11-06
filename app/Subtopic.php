<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtopic extends Model
{
    protected $guarded = [];

    public function topics() {

        return $this->belongsTo(Topic::class);

    }

    public function formulas() {
        return $this->hasMany(Formula::class);
    }
}
