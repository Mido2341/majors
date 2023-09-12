<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    protected $fillabl= [ 'rate','doctor_id' ];

function doctors()
{
   return $this-> hasMany(Doctor::class);
}

}
