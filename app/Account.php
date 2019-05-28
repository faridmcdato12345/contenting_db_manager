<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'email/username', 'password',
    ];

    public function accountType(){
        return $this->belongsTo('App\Account_type');
    }
}
