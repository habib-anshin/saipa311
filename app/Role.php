<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='tbl_roles';

    Public function permission(){

        return $this->hasMany(Permission::class);
    }

    Public function user(){

        return $this->hasMany(User::class);
    }
}
