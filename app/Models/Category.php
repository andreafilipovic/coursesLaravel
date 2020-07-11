<?php

namespace App\Models;

class Category{

    public function get_all_categories(){
        return \DB::table('categories')->get();
    }
}