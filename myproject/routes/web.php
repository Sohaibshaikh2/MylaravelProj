<?php

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// Route::get('/',function(){

//     return view('Class.view');

// });

// Route::get('page/test',function(){

//         return view('test',['user'=>'sohaib']);
// })->name('test');


// Route::get('Page/test',function(){


//     return view('test')->with('user','Sohaib')->with('city','Karachi');
// })->name('test');


Route::get('Test',[TestController::class,'Show']);

Route::get('/',[SubjectController::class,'getsubj']);
Route::post('addsub',[SubjectController::class,'addsubj']);
Route::get('adsub/view',[SubjectController::class,'addview']);
Route::get('/subject/{id}',[SubjectController::class,'singleview'])->name('view.subj');
Route::post('subupdt{id}',[SubjectController::class,'subupdt'])->name('subject/update');
Route::get('subdlt{id}',[SubjectController::class,'subdlt'])->name('subject/delete');

Route::get('teacher/get',[TeacherController::class,'get'])->name('teacher.get');
Route::get('teacher/insert',[TeacherController::class,'insert'])->name('teacher.inserts');
Route::post('teacher/store',[TeacherController::class,'teachstore'])->name('teacher.store');
Route::get('teacher/edit{id}',[TeacherController::class,'edit'])->name('teacher.edit');
Route::post('teacher/update{id}',[TeacherController::class,'teachupdate'])->name('teacher.update');
Route::get('teacher/delete{id}',[TeacherController::class,'delete'])->name('teacher.delete');






