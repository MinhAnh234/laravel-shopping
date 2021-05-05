<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    //
    public function Sale(){
        return $this->belongsTo('App\Models\Sale', 'Sale_id');
    }
}
