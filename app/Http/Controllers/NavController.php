<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nav;

class NavController extends Controller
{
    public function index(){
        $model=new Nav();
        $navigation=$model->get_nav();
        return response()->json($navigation);
    }
}
