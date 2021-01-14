<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;
class ProductController extends Controller
{
    //
    
  public function index() {
    // get data from a database
$products = DB::table('products')->latest()->paginate(3);

    return view('product.index',compact('products'));
  }

  public function create() {
    
    return view('product.create',);
  }

  public function store(Request $request) {
       
   
    $data = array();
    $data['product_name'] = $request->product_name;
    $data['product_code'] = $request->product_code;
    $data['details'] = $request->details;

    $image = $request->file('logo');
    if($image){
      $image_name= rand(100000,9999999);
            $ext = strtolower($image->getClientOriginalExtension());
           $image_full_name= $image_name. '.' .$ext;
           $upload_path ='media';
           $image_url = $upload_path."/".$image_full_name;
           
           $success = $image->move($upload_path,$image_full_name);
         
           $data['logo'] = $image_url;

            $product = DB::table('products')->insert($data);
            
      return redirect('/product/index')->with('success', 'product created sucessfull');
    }

  }


  public function edit($id)
    {
      $product = DB::table('products')->where('id', $id)->first();
      return view('product.edit',compact('product'));
    }


    
    public function update(Request $request, $id)
    {
   $oldlogo = $request->old_logo;

      $data = array();
      $data['product_name'] = $request->product_name;
      $data['product_code'] = $request->product_code;
      $data['details'] = $request->details;
  
      $image = $request->file('logo');
      if($image){
        unlink($oldlogo);
        $image_name= rand(100000,9999999);
            $ext = strtolower($image->getClientOriginalExtension());
           $image_full_name= $image_name. '.' .$ext;
           $upload_path ='media';
           $image_url = $upload_path."/".$image_full_name;
           
           $success = $image->move($upload_path,$image_full_name);
         
           $data['logo'] = $image_url;

         
            
              $product = DB::table('products')->where('id', $id)->update($data);
              return redirect('/product/index')->with('success', 'product updated sucessfull');
          
      }
    }

    public function delete($id)
        {
      $data = DB::table('products')->where('id', $id)->first();
      $image = $data->logo;
      unlink($image);
      $product=DB::table('products')->where('id', $id)->delete();
      return redirect('/product/index')->with('success', 'product deleted sucessfull');
          
    }

    
    public function show($id)
        {
      $data = DB::table('products')->where('id', $id)->first();
      
      return view('product.show',compact('data'));
          
    }
}
