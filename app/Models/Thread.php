<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    //

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function threads()
    {
        return $this->belongsToMany(Thread::class)->withTimestamps();
    }
}