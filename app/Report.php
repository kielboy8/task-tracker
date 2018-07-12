<?php

namespace App;

class Report extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function task() {
        return $this->hasMany(Task::class);
    }
}
