<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Swimmer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'second_name',
        'school_class_id',
        'sex',
        'status'
    ];

    public function schoolClass(){
        return $this->belongsTo('App\Models\SchoolClass');
    }

    public function school(){
        return $this->hasOneThrough(
            'App\Models\School',
            'App\Models\SchoolClass',
            'id',
            'id',
            'school_class_id',
            'school_id'
        );
    }
}
