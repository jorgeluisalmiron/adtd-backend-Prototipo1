<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Youtube extends Model
{
    protected $table = 'youtube';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'url', 'competence_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
