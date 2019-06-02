<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cpanel extends Model
{
    //
    protected $fillable = [
        'url','username','password'
    ];

    public function client(){
        return $this->belongsTo('App\Client');
    }
}
