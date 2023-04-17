<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Prac;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[Authentication::class,'index']);
Route::post('/sign',[Authentication::class,'signIn'])->name('signin');
Route::get('/signIn',[Authentication::class,'index'])->name('signInform');
Route::get('/logout',[Authentication::class,'signOut'])->name('logOut');

Route::group(['middleware' => 'isUser'],function(){
Route::resource('/student',StudentController::class);

Route::get('/group',[Prac::class,'index'])->name('index');
Route::get('/group/list',[Prac::class,'group_list'])->name('list');
Route::post('/prac',[Prac::class,'multi'])->name('multi');

Route::resource('/faculty',FacultyController::class);

Route::resource('/project',ProjectController::class);


});