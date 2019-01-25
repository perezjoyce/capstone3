<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//A type belongs to many users
class Type extends Model
{
    public function users(){
    	return $this->hasMany('\App\User');
    }
}
