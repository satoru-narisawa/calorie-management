<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model

{
    public function user(){
        
    return belongsTo(User::class);
    }
}
