<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    //
    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'phone',
        'login',
        'passe'
    ];

    // $promotion->product->nom
    // $promotion->product->id

    public function manager() {
        return $this->belongsTo('App\Manager');
    }

    // $promotion->station
    public function station() {
        return $this->belongsTo('App\Station');
    }
}
