<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;

class InstructorsController extends Controller
{
    public function index(){
        $model=new Instructor();
        $instructors=$model->get_all();
        return response()->json($instructors);
    }
}
