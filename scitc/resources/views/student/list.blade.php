<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    这里显示学生的数据
    <hr>
    
    姓名：{{ $name }}

    @foreach($list as $s)
        @foreach($s as $a)
            {{ $a }}
        @endforeach
    @endforeach

</body>
</html>