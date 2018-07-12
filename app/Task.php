<?php

namespace App;

class Task extends Model
{
    public function report() {
    	return $this->belongsTo(Report::class);
    }
}
