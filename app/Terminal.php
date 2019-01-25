<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//a terminal belongs to an area
class Terminal extends Model
{
    public function area(){
    	return $this->belongsTo('\App\Area');
    }
}
