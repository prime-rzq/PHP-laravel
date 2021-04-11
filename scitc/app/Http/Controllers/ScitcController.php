<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 引用模型
use App\Models\Scitc;

class ScitcController extends Controller
{
    function list()
    {
        $list = Scitc::all();
        return view('index',['list' => $list]);
    }
}
