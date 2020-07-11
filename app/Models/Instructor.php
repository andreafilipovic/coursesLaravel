<?php

namespace App\Models;
class Instructor{

    public function get_all(){
        return \DB::table('instructors')->get();
    }
}