<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    public function offices(){
        return $this->hasMany('App\Models\Department');
    }
}
