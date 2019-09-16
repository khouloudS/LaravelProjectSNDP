<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    //
    protected $fillable = [
        'quantite'
    ];



    public function product() {
        return $this->belongsTo('App\Product');
    }

    public function station() {
        return $this->belongsTo('App\Station');
    }
}
