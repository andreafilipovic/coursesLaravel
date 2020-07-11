<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/courses','CoursesController@index');
Route::get('/courses/{id}','CoursesController@course_details');
Route::get('/new_course','CoursesController@create');
Route::post('/insert_course','CoursesController@store');
Route::get('/category','CategoryController@get_all_categories');
Route::get('/courses_category/{id}','CoursesController@get_courses_from_cat');
Route::get('/instructors','InstructorsController@index');
Route::post('/contact','ContactController@sendEmail');
Route::get('/nav','NavController@index');