<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    
  public function index() {
    // get data from a database


    return view('product.index',);
  }
}
