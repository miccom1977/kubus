<?php

namespace App\Services;

use App\Models\School;

class SchoolService {

    public function getAll()
    {
        return view('dashboard',['schools' => School::All() ] );
    }

}
