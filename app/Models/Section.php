<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function department(){
        return belongsTo('App\Models\Department');
    }
}
