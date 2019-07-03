<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acidente extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "acidentes";
    /*protected $fillable = [
        'name', 'email', 'password',
    ];*/

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /*protected $hidden = [
        'password', 'remember_token',
    ];*/

    public function dia_da_semana (){
        return $this->hasOne(Acidente::class);
    }
}
