<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'school_id', 'day', 'hour'];

    public function school(){
        return $this->belongsTo('App\Models\School');
    }

    public function swimmer(){
        return $this->hasMany('App\Models\Swimmer');
    }
}
