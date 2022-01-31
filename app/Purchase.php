<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    
    public function Supplier(){

        return $this->belongsTo('\App\Supplier');
    }
}
