<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    protected $table='users';
    use HasApiTokens, Notifiable;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
  /**  protected $hidden = [
        'password', 'remember_token',
    ];*/

    /** @var string  Relationship between rep and user*/
    public function representation(){
       $this->belongsTo(Representation::class);
    }
    public function role(){
        $this->belongsTo(Role::class);
    }
}
