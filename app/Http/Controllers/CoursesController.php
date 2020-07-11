<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\Instructor;


class CoursesController extends FrontController
{
  
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $modelCourse=new Course();
        $courses=$modelCourse->get_all_courses();
         return response()->json(['courses'=>$courses,'categories'=>$this->data]);
    }

    public function get_courses_from_cat($id){
        $modelCourse=new Course();
        $modelCat=new Category();
        $categories=$modelCat->get_all_categories();
        $courses=$modelCourse->get_courses_from_cat($id);
        return response()->json(['courses'=>$courses,'categories'=>$categories]);
    }

    public function course_details($id){
        $modelCourse=new Course();
        $course=$modelCourse->course_details($id);
        return response()->json($course);
    }

    public function create(){
        $modelInstrucors=new Instructor();
        $modelCat=new Category();
        $ins=$modelInstrucors->get_all();
        $cat=$modelCat->get_all_categories();
        return response()->json(['instrucors'=>$ins,'categories'=>$cat]);
    }

    public function store(Request $request){
        $title=$request->title;
        return response()->json($title);
    }
}
