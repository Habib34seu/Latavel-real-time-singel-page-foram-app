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
    // protected $filable=['title','slug','body','category_id','user_id'];

    protected $guarded=[];

    public function getRouteKeyName(Type $var = null)
    {
        return 'slug';
    }

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
    public function getPathAttribute(Type $var = null)
    {
        return asset("api/question/$this->slug");
    }
}
