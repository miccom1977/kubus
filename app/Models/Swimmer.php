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
    ];

    public function schoolClass(){
        return $this->belongsTo('App\Models\SchoolClass');
    }

}
