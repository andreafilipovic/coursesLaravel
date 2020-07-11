<?php
namespace App\Models;

class Course{

    public function get_all_courses(){
        $courses = \DB::table('courses')->get();
        return $courses;
    }

    public function get_courses_from_cat($id){
        return \DB::table('courses')
                ->where('idCat',$id)
                ->get();
    }

    public function get_all_cat(){
        return \DB::table('categories')->get();
    }

    public function course_details($id){
        $details=\DB::table('courses AS c')
                ->join('instructors AS i','c.idInstructor','=','i.idInstructor')
                ->join('categories AS cat','c.idCat','=','cat.idCat')
                ->select('c.*','i.*','cat.name')
                ->where('idCourse',$id)
                ->first();
        $lectures=$this->course_lecture($id);
        $details->lectures=$lectures;
        return $details;

    }

    public function course_lecture($id){
        return \DB::table('lectures')
                    ->where('idCourse',$id)
                    ->get();
    }

}
