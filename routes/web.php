<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\c2; 
use  App\Http\Controllers\c4;//dealing with formum views  

use  App\Http\Controllers\c3; 

use  App\Http\Controllers\todo;
use Illuminate\Support\Facades\DB;
use App\Models\m2;
use App\Models\blogpost;
use App\Models\tododata;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/demo',function(){
//     echo "u are in demo";
//     return view('radhaa');
// });
// Route::get('/demo/{name}/{id?}',function($name,$id=null){
//     $a="<h1>from heading<br><h1>";
//     $d=compact('name','id','a');
//     // @isset($id)
//     // return view('radhaa');
//     // @endisset
//     return view('radha')->with($d);
// }
// );


Route::get('/todo',function(){
    return view("todo");
});
Route::post('/todo',[todo::class,'add']);
// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/',function(){
    return view('register');
});
Route::post('/',[c2::class,'f1']);


// Route::get("/see",[c2::class,'see']);
Route::view('login','login');
Route::post('login',[c2::class,'login']);



Route::view('admin','admin');
Route::post('/admin',[c3::class,'f2']);


Route::view("/score",'score');
 Route::post('/score',[c3::class,'f3']);
// Route::get('/score',function(){
//     $ans= DB::select("select * from m2s");
   
//     $c=compact("a","b");
//     return view('result')->with($c);
// });
Route::view("/help","help");
Route::view('/page',"page");
Route::post("/page",[c4::class,'page']);//the function to see the page
Route::view('/write',"write");//a page from which user will give login details and writes his opinions ,verification of usr will done here
Route::post("/write",[c4::class,"write"]);
//on post u will be directd to fill the db and say done
// Route::view('*',"about");
Route::fallback(function () {
    return view('about');
});