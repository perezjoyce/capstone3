<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//a status belongs to many recommendations
class Status extends Model
{
    public function recommendations(){
    	return $this->hasMany('\App\Recommendation');
    }
}
