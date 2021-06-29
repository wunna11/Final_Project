<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //post id1 -> user wunna
    function user() {
        return $this->belongsTo(User::class);
    }
}
