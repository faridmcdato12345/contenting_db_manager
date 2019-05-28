<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cpanel extends Model
{
    //
    protected $fillable = [
        'url','db_name','db_uname'
    ];

    public function client(){
        return $this->belongsTo('App\Client');
    }
}
