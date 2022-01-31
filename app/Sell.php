<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    public function Customer(){

        return $this->belongsTo('\App\Customer');
    }
}
