<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


//a recommendation belongs to one status
class Recommendation extends Model
{
    public function status(){
    	return $this->belongsTo('\App\Status');
    }
}
