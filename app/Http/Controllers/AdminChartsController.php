<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminChartsController extends Controller
{
    public function view_charts(){
        return view('admin.pages.charts');
    }
}
