<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representation extends Model
{
    protected $table='tbl_representations';
    public function users(){
        $this->hasMany(User::class);
    }
}
