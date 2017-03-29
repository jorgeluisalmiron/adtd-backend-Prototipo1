<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Competence extends Model
{
    protected $table = 'competences';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
