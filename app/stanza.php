<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stanza extends Model
{
    protected $table = 'stanze';
    protected $fillable = [
        "room_number" ,
        "floor" ,
        "beds"
    ] ;
}
