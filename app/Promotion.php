<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = [
        'pourcentage',
        'prixfinal',
        'datedebut',
        'datefin',
    ];

    // $promotion->product->nom
    // $promotion->product->id

    public function product() {
        return $this->belongsTo('App\Product');
    }

    // $promotion->station
    public function station() {
        return $this->belongsTo('App\Station');
    }
}
