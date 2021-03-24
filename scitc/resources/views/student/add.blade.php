<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    这是一个学生信息录入界面。
    <form action="/stusave" method = 'post'>
        <!-- laravel中，提交表单，一般要加 @csrf -->
        @csrf
        
        学号：<input type="text" name = 'stuId'></p>
        姓名<input type="text"  name = 'stuName'></p>
        <button type="submit">提交</button>
    </form>
</body>
</html>