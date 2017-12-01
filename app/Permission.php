<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table='tbl_permissions';

    Public function role(){

        return $this->hasMany(Role::class);
    }
}
