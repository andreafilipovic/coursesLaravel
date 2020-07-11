<?php 

namespace App\Models;
class Nav{
    public function get_nav(){
        return \DB::table('navigation')->get();
    }
}