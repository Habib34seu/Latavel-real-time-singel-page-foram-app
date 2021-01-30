<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\User;
use App\Models\Like;

class Reply extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function question(Type $var = null)
    {
        return $this->belongsTo(Question::class);
    }
    public function user(Type $var = null)
    {
        return $this->belongsTo(User::class);
    }
    public function like(Type $var = null)
    {
        return $this->hasMany(Like::class);
    }

}
