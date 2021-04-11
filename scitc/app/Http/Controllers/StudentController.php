<?php

// 命名空间，封装到控制器的专用包
namespace App\Http\Controllers;
// 引用请求的处理类
use Illuminate\Http\Request;

// 定义学生控制器类，并继承Controller
class StudentController extends Controller
{
    // 完成相映的 业务逻辑 处理，即需要的功能操作，每个控制器只完成自己的操作，不建议耦合， 每个控制器功能代码取决于不同的系统需求
    
    // ex:在图书管理系统中学生的控制器
    // 添加读者
    public function add()
    {
        return view('student.add');
    }
    // 保存信息
    public function save(Request $req)
    {
        // 调用模型（Moudel）完成数据的存储
        // ……
        // 存储到数据库后，提醒操作人员已经完成保存，并跳转到页面
        return '添加成功！<br/ >学号：' . $req -> stuId . '<br />姓名：' . $req -> stuName;
    }

    // 查询学生的信息
    // laravel中可以省略public,默认是public
    public function all()
    {
        // 从数据库查询所有学生信息
        // $list = ['id' => '001','name' => '张三','sex' => '男'];

        $list = [
            ['id' => '001','name' => '张三','sex' => '男'],
            ['id' => '002','name' => '李四','sex' => '女'],
            ['id' => '003','name' => '王二','sex' => '女'],
            ['id' => '004','name' => '麻子','sex' => '男']
        ];

        // 数据查询后，要传递到界面（视图）
        // return view('student.list',['name' => '张三']);
        return view('student.list',['name' => '张三','list' => $list]);
    }

}

/* 
    
*/