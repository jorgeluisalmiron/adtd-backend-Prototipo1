<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Link extends Model
{
    protected $table = 'links';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'url', 'imageUrl', 'competence_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
