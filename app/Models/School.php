<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'year'];

    public function classes(){
        return $this->hasMany('App\Models\SchoolClass');
    }
}
