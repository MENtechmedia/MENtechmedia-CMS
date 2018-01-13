<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasPhotos;
    use ExplodableDate;

    protected $appends = [
        'portrait',
        'landscape',
        'original',
    ];

    protected $fillable = [
        'title',
        'date',
        'link',
        'description',
    ];
}
