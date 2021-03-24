<?php
// 此文件定义所有web访问使用的路由

// 引用系统的路由控制类，类包含两个内容：方法和属性
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

// // 因为路由写在统一文件，方便管理，安全控制
// // ::代表静态方法使用(不需要实例化，优点：方便，方法已被缓存，速度快)
// Route::get('/', function () {
//     return view('welcome');
// });


// // 自定义路由
// Route::any('/news',function(){
//     // 路由要做的事情，可以直接返回信息，也可以导航到某个页面，还可以路由到控制器

//     // 返回信息
//     // return 'this is a news page!';

//     // 返回到试图
//     return view('news');

//     // 路由到控制器(核心)
//     // return 
// });


// // 路由传参
// Route::get('/xw/{news_id}',function($id){
//     // return view('news');
//     return "这是第 $id 篇新闻<br/>";
    
// });

// //多个参数
// Route::get('/xw/{news_id}/{user_name?}',function($id,$name){
//     // return view('news');
//     // return "这是第 $id 篇新闻<br/>作者： $name ";
//     // 根据id查询数据库（查数据在控制器完成），把数据传给页面

//     return view('news',['id' => $id,'name' => $name]);
// });

// // 可选参数 使用？号，一般要设置默认值
// Route::get('/xw/{news_id?}',function($id = 0){
//     // return view('news');
//     return "这是第 $id 篇新闻<br/>";
    
// });


// // 给参数验证（使用正则表达式）,可以有效过滤想要的参数
// Route::get('/log/{type}/{userId}',function($t,$id){
//     if($t == 's'){ return 'This is a student.'; }
//     if($t == 't'){ return 'This is a teacher.'; }
// // }) -> where('type','[a-z]');
// }) -> where(['type' => '[a-z]','userId' => '[0-9]+']);

// Route::get('/news/{id}',function($id){
//     return "这是第 $id 篇新闻。";
// }) -> where('id','\d+'); //整型
// Route::get('/notice/{id}',function($id){
//     return "这是第 {$id} 篇新闻。";
// // }) -> whereNumber('id');    //整型,模式约束
// }) -> whereUuid('id');    //整型,模式约束

// // 路由重定向（一般用于页面条件新跳转）
// Route::redirect('/login','/news/23');

// Route::get('/user/{type}',function($t){
//     if($t == 's'){ return redirect('/news/24');}
//     if($t == 't'){ return redirect('/news/90');}
//     return 'name 命名';
// }) -> name('utype');

// // 路由分组 group
// // 写法一
// Route::prefix('test') -> group( function(){
//     Route::get('/test/{test}',function($t){
//         return `This is {$t} group.`;
//     });
// });
// // 写法二
// Route::group(['prefix' => 'user'],function(){
//     Route::group(['prefix' => 'student'],function(){
//         // 用户进入登陆界面
//         Route::get('login',function(){
//             return view('stdLogin');
//         });
//         // 一般post接受用户传递的数据进行业务处理，建议使用 控制器 操作
//         Route::post('login',[stdController::class,'loginCheck']);
//         Route::get('reg',function(){
//             return view('reg');
//         });
//         Route::post('reg',[stdController::class,'reg']);
//     });
//     // teacher
//     Route::group(['prefix' => 'teacher'],function(){
//         Route::get('login',function(){
//             return view('tLogin');
//         });
//         Route::post('login',[tController::class,'loginCheck']);
//         Route::get('reg',function(){
//             return view('reg');
//         });
//         Route::post('reg',[tController::class,'reg']);
//     });
// });
// Route::group(['prefix' => 'admin'],function(){
//     return view('login');
// });

// // 路由的回退   fallback
// // 回退路由：在没有其他路由可以匹配的时候调用，必须放在最后（用于替换原有的404错误处理）
// Route::fallback( function(){
//     // return view('notFound');
//     return '加载君找不到资源了，-_-';
// });

// 当前路由 current




// 控制器

