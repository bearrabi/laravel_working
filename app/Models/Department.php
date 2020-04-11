<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function office(){
        return $this->belongsTo('App\Models\Office');
    }

    public function sections(){
        return $this->hasMany('App\Models\Section');
    }
}
