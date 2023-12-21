<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Language;
use App\Models\Product;

class AdminController extends Controller
{
    public function showDashboard()
{
    return view('admin.partials._sidebar ');
}
    public function view_category(){
        $data=Category::all();
        return view ('admin.pages.category',compact('data'));
    }
    public function add_category(Request $request){
       $data= new Category;
       $data->category_name=$request->category;
       $categoryName = $request->category;
       $data->save();
       return redirect()->back()->with('message','Category  "'.$categoryName.'" added successfullyyy!!!');
    }

    public function delete_category($id){
        $data=  Category::find($id);
        $categoryName = $data->category_name;
        $data->delete();
        return redirect()->back()->with('message','Category  "'.$categoryName.'"  deleted successfullyyy!!!');
     }

     public function view_products(){
        $category = Category::all();
        $language = Language::all();

        return view('admin.pages.product',compact('category','language'));
        
     }
     public function view_languages(){
      $data = Language::all();
      return view('admin.pages.language',compact('data'));      
   }
   public function add_language(Request $request){
      $data= new Language;
      $data->language_name=$request->language;
      $languageName = $request->language;
      $data->save();
      return redirect()->back()->with('message','Language  "'.$languageName.'" added successfullyyy!!!');
   }
   public function delete_language($id){
      $data=  Language::find($id);
      $languageName = $data->language_name;
      $data->delete();
      return redirect()->back()->with('message','Language  "'.$languageName.'"  deleted successfullyyy!!!');
   }
     public function add_product(Request $request){
        $product = new Product;
     

        $product->title=$request->title;
        $productName = $request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->discount_price=$request->discount_price;
        $product->quantity=$request->quantity;
        $product->category_id=$request->category;
        $product->language_id=$request->input('languages');
        $selectedLanguage = Language::find($request->input('languages'));
        $selectedCategory = Category::find($request->input('category'));
        if ($selectedCategory) {
      
         $product->category = $selectedCategory->category_name;
     }
     if ($selectedLanguage) {
        
        $product->language = $selectedLanguage->language_name;
      }
       
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product_img',$imagename);
        $product->image=$imagename;
        $product->save();
        return redirect()->back()->with('message', 'Product  "'.$productName.'" Added Successfullyyy');  
     }

     public function show_products(Request $request){
      //   $product = Product::with('language')->get();
      $product = Product::query();
      $categories = Product::distinct('category')->pluck('category');
      $languages = Product::distinct('language')->pluck('language');
      // Check if a category filter is applied
      if ($request->has('category')) {
          $product->where('category', $request->input('category'));
      }
  
      // Check if a language filter is applied
      if ($request->has('language')) {
          $product->where('language', $request->input('language'));
      }
  
      // Add other filters as needed
  
      $product = $product->get();
        return view('admin.pages.show_products',compact('product','categories','languages'));
        
     }

     public function delete_product($id){
        $product=  Product::find($id);
        $productName= $product->title;
        $product->delete();
        return redirect()->back()->with('message','Product "'. $productName . '" deleted successfullyyy!!!');
     }
     public function update_product($id){

        $product=  Product::find($id);
        $category = Category::all();
        $language = Language::all();

        return view('admin.pages.update_product',compact('product','category','language'));
     }

     public function update_product_confirm(Request $request, $id){

        $product=  Product::find($id);
        $product->title=$request->title;
        $productName=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->discount_price=$request->discount_price;
        $product->quantity=$request->quantity;
      
          $selectedLanguage = Language::find($request->input('languages'));
          if ($selectedLanguage) {
            $product->language_id = $selectedLanguage->id;
            $product->language = $selectedLanguage->language_name;
          }
          
          $selectedCategory = Category::find($request->input('category'));
          if ($selectedCategory) {
              
              $product->category_id = $selectedCategory->id;
              $product->category = $selectedCategory->category_name;
          } 
    
        $image=$request->image;
        if($image){
          $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product_img',$imagename);
        $product->image=$imagename;   
        }
        else{
            $product->image=null;
        }
       
        $product->save();
        return redirect()->back()->with('message', 'Product  "'.$productName.'" Added Successfullyyy');
 
        
     }


     public function bulkDelete(Request $request)
{
    $selectedProducts = $request->input('selected_products', []);

    // Check if the "Bulk Delete Selected" button is clicked
    if ($request->has('bulk_delete_selected')) {
        // Delete the selected products
        Product::whereIn('id', $selectedProducts)->delete();
        return redirect()->back()->with('message', 'Selected products deleted successfully');
    }

    // Check if the "Delete All with Current Filter" button is clicked
    if ($request->has('bulk_delete_filter')) {
      // Add additional conditions based on the current filter criteria
      // For example, if you are filtering by category and language, you might do something like this:
      $categoryFilter = $request->input('category');
      $languageFilter = $request->input('language');

      $query = Product::query();

      if (!empty($categoryFilter)) {
          $query->where('category', $categoryFilter);
      }

      if (!empty($languageFilter)) {
          $query->where('language', $languageFilter);
      }

      $query->delete();

      return redirect()->back()->with('message', 'All products with the current filter deleted successfully');
  }

    // Check if the "Delete All" button is clicked
    if ($request->has('bulk_delete_all')) {
        // Delete all products
        Product::truncate();
        return redirect()->back()->with('message', 'All products deleted successfully');
    }

    return redirect()->back()->with('message', 'No action performed');
}


}
