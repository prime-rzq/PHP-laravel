<?php

// 这里要显示生命控制器的目录
// use App\Http\Controllers\StudentController;
// use App\Http\Controllers\ScitcController;
// 以上两句代码课简写为如下代码：
use App\Http\Controllers\{
    StudentController,
    ScitcController
};

use Illuminate\Support\Facades\Route;

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


// 路由调用控制器
Route::get('/stuadd',[StudentController::class,'add']); 

// 把用户输入的数据提交到控制器
Route::post('/stusave',[StudentController::class,'save']);

// 查询学生的路由
Route::get('stulist',[StudentController::class,'all']);

// 将数据库中的内容传输到界面
Route::get('/scitc',[ScitcController::class,'list']);