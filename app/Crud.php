<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    public function admin(){
        
        return $this->hasMany(Admin::class);
    }
}
