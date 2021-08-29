<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circle extends Model
{
    use HasFactory;

    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }

    public function bureaus()
    {
        return $this->hasMany(Bureau::class);
    }
}
