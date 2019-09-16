<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = [
        'id',
        'cin',
        'nom',
        'prenom',
        'phone'
    ];
    public function customer() {
        return $this->belongsTo('App\Customer');
    }

}
