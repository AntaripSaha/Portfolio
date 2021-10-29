<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'img', 'name', 'designation', 'twitter', 'facebook', 'instagram', 'linkedin'
    ];
}
