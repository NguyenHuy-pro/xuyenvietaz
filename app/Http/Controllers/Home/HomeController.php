<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index($provinceId = null, $districtId = null, $keyword = null)
    {
        return view('home.index');
    }
}
