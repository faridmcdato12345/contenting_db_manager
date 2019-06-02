<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain_Registration extends Model
{
    protected $fillable = [
        'url','username','password'
    ];
    public function account(){
        return $this->belongsTo('App\Account');
    }
}
