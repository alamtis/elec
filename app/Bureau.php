<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bureau extends Model
{
    use HasFactory;

    public function circle() {
        return $this->belongsTo(Circle::class);
    }
}
