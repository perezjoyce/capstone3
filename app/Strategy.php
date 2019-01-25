<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strategy extends Model
{
     public function enroutes(){
    	return $this->belongsToMany('\App\Enroute', 'enroute_strategies')->withTimestamps();
    }
}
