<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'title', 'body', 'type', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
