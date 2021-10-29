<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
   
 protected $fillable = [
    'category','title','sub_title','small_img','big_img'
 ];
}
