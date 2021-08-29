<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    use HasFactory;

    protected $fillable = ['cin', 'fname', 'lname', 'bureau', 'circle', 'by_user', 'municipality_id', 'status','status_value'];

    public function municipality()
    {
       return $this->belongsTo(Municipality::class);
    }
}
