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
$products = DB::table('products')->get();

    return view('product.index',compact('products'));
  }

  public function create() {
    
    return view('product.create',);
  }

}
