<?php

namespace VendorName\Skeleton\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        return view('xxx::index');
    }
}
