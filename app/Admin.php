<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function crud(){

        return $this->belongsTo(Crud::class);
    }
}
