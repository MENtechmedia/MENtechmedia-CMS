<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musician extends Model
{
    use HasPhotos;

    protected $appends = [
        'portrait',
    ];

    protected $fillable = [
        'name',
        'function',
        'description',
    ];
}
