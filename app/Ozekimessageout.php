<?php
/**
 * Created by PhpStorm.
 * User: khouloud
 * Date: 03/12/2017
 * Time: 11:04
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Ozekimessageout extends Model
{

    //
    protected $fillable = [
        'sender',
        'receiver',
        'msg',
        'senttime',
        'receivedtime',
        'status',
        'msgtype',
        'operator'
    ];
}



