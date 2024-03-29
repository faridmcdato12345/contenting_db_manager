<?php

namespace App;

use App\Client;
use App\Account;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $fillable = [
        'url','db_name','db_username','username','password'
    ];

    public function client(){
        return $this->belongsTo('App\Client');
    }
    public function account(){
        return $this->belongsTo('App\Account');
    }
}
