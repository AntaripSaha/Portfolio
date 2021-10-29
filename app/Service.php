<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable =[
        'icon','title','description','category','name','import', 'img1', 'img2', 'img3'
      ];
    
}
