<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    //
    public function products(){
        return $this->hasMany('App\Models\products', 'Sale_id');
    }

}
