<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dash extends Model
{
    protected $fillable =[
        'address','email','phone','twitter','facebook','instagram','linkedin','logo_text','logo_img'
     ];
}
