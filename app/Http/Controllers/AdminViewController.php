<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminViewController extends Controller
{
    public function view_icons(){
        return view ('admin.pages.icons');
    }
}
