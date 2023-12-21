<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{


    
  public function index (){
// Example in your controller
$product = Product::where('language', 'en')->latest('created_at')->take(4)->get();
$product2 = Product::where('language', 'tr')->get();
return view('front.pages.main', compact('product','product2'));

  }
    
  public function redirect (){
    $usertype=Auth::user()->usertype;
    if($usertype=='1'){
        return view('admin.pages.main');

    }
    else{
      $product = Product::where('language', 'en')->get();
$product2 = Product::where('language', 'tr')->get();

        return view('front.pages.main',compact('product','product2'));
    }

  }


  public function about (){
  
    return view('front.pages.about');
  }  
  public function contact (){
  
    return view('front.pages.contact');
  }
}
