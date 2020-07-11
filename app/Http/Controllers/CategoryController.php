<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function get_all_categories(){
        $modelCat=new Category();
        $categories=$modelCat->get_all_categories();
        return response()->json($categories);
    }
}
