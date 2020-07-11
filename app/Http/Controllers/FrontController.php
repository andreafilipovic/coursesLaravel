<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class FrontController extends Controller
{
    protected $data=[];
    public function __construct(){
        $modelCat=new Category();
        $categories=$modelCat->get_all_categories();

        $this->data=$categories;
    
    }
}
