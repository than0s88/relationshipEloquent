<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    public function guardian(){
        return $this->belongsTo(Guardian::class);
    }

    public function school(){
        return $this->hasOne(School::class);
    }
}
