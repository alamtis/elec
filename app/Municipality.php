<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    public function voter()
    {
       return $this->hasMany(Voter::class);
    }

    public function circle()
    {
       return $this->hasMany(Circle::class);
    }
}
