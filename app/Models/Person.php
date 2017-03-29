<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Person extends Model
{
    protected $table = 'persons';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $fillable = ['firstname','lastname','type','skype','phone_mobile','phone_home','address','birthdate','competence_id','user_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
