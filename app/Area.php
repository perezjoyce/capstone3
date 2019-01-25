<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function terminals(){
    	return $this->hasMany('\App\Terminal');
    }
}
