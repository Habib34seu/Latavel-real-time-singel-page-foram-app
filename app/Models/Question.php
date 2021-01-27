<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Reply;
use App\Models\Caregory;

class Question extends Model
{
    use HasFactory;

     public function user(Type $var = null)
    {
        return $this->belongsTo(User::class);
    }

    public function replies(Type $var = null)
    {
        return $this->hasMany(Reply::class);
    }
    public function category(Type $var = null)
    {
        return $this->belongsTo(Caregory::class);
    }
}
