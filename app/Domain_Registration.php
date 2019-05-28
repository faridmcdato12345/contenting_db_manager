<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain_Registration extends Model
{
    public function account(){
        return $this->belongsTo('App\Account');
    }
}
