<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'title', 'poster', 'num_of_rooms', 'num_of_beds', 'num_of_bathrooms', 'mq', 'sponsored'
    ];
}
