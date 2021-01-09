@extends('product.layout')

@section('content')
<br><br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/product/create" title="Create a product"> create new product<i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
        @if($message = Session::get ('success'))
        <div class = "alert alert-success">
        <p>{{$message }}</p>
        </div>
        @endif
        <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Product name</th>
            <th>Product code</th>
            <th>Details</th>
            <th>Product logo</th>
            <th>Actions</th>
        </tr>
        @foreach ($products as $product)
            <tr>
           
                <td>{{$product->product_name}}</td>
                <td>{{$product->product_code}}</td>
                <td>{{$product->details}}</td>
                <td><img  src = "{{URL::to($product->logo)}}" height= "70px;" width = "80px;"></td>


                <td>
        

                        <a href="" title="show">
                            <i class="btn btn-danger">SHOW</i>
                        </a>

                        <a href="{{URL::to('edit/product/'.$product->id)}}">
                            <i class="btn btn-primary">EDIT</i>
                        </a>
                        <a href="">
                            <i class="btn btn-info">DELETE</i>
                        </a>

    
                </td>
               
            </tr>
     @endforeach
    </table>


    </div>

   
@endsection