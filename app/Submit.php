<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submit extends Model
{
    protected $fillable = [
        'title',
        'location',
        'status',
        'property',
        'video',
        'map',
        'price',
        'size',
        'bedroom',
        'bathroom',
        'tv',
        'garages',
        'description',
        'pool',
        'user_id',
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
