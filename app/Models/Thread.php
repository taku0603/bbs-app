<?php

namespace App\Models;

class Thread extends Model
{
    use HasFactory;
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
