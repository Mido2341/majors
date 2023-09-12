<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable=['name','email','city','password','image','major_id'];
    // protected $with =['major'];
    function major()
    {
        return $this->belongsto(Major::class);
    }
    function rates()
    {
        return $this->hasMany(Rate::class);
    }
}
