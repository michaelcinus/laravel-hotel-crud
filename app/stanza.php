<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stanza extends Model
{
    protected $table = 'stanza';
    protected $fillable = [
        "room_number" ,
        "floor" ,
        "beds"
    ] ;
}
