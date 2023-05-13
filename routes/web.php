<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\Addteacher;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SelectedStudent;
use App\Http\Controllers\Teacherlogin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registration;
use App\Http\Controllers\WorkUpdate;
use App\Http\Controllers\index;







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

Route::get('/', function () {
    return view('welcome');
});


//backedroutes
Route::get('login/admin', [AdminController::class, 'adminLoginForm'])->name('admin.login.form');
Route::post('admin-login', [AdminController::class, 'adminLogin'])->name('admin.login');
Route::get('login/teacher', [Teacherlogin::class, 'teacherLoginForm']);
Route::post('teacher-login', [Teacherlogin::class, 'teacherLogin']);


Route::get('teacher/dashboard', [Teacherlogin::class, 'teacherdashboard']);
// Route::group(['middleware' => 'Te'], function () {




Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard.form');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('store-data', [HomeController::class, 'Store_data']);
Route::get('/registration', [HomeController::class, 'registration']);

Route::get('Action_data', [ActionController::class, 'Action_data']);
Route::post('store-action', [ActionController::class, 'Store_action']);
Route::get('/c', [ActionController::class, 'cont']);
Route::get('/tinfo', [ActionController::class, 'info']);



Route::get('/add-teacher', [Addteacher::class, 'add_teacher']);
Route::post('/teacherinfo', [Addteacher::class, 'teacherinfo']);
Route::get('/teacher-list', [Addteacher::class, 'teacher_list']);
Route::get('/Student_list', [Addteacher::class, 'Student_list']);
Route::post('/SlectedStudent', [SelectedStudent::class, 'SlectedStudent']);
Route::get('/show-data', [SelectedStudent::class, 'Show_data']);


Route::get('/work-up', [WorkUpdate::class, 'work_update']);
Route::post('work-list', [WorkUpdate::class, 'work_action']);
Route::get('update_show', [WorkUpdate::class, 'update_show']);

Route::get('/index', [index::class, 'work_update']);