<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialism extends Model
{
    protected $table = 'students';
    protected $fillable =[
        'name' , 'mobile'
    ];
}
