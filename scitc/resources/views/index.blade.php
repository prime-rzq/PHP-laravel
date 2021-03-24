这里显示数据库的数据：<hr>
@foreach($list as $s)
    学校名称： {{ $s -> name }} <br>
    学校简介:  {{ $s -> inro }} <br>
    负责人：   {{ $s -> manager }} <br>
    联系电话： {{ $s -> tel }} 
    <hr>
@endforeach