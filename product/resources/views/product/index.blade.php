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
        <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Product name</th>
            <th>Product code</th>
            <th>Details</th>
            <th>Product logo</th>
            <th>Actions</th>
        </tr>

            <tr>
            @foreach ($products as $product)
                <td>{{$product->product_name}}</td>
                <td>{{$product->product_code}}</td>
                <td>{{$product->details}}</td>
                <td></td>


                
                    <form action="" method="POST">

                        <a href="" title="show">
                            <i class="btn btn-danger">SHOW</i>
                        </a>

                        <a href="">
                            <i class="btn btn-primary">EDIT</i>
                        </a>
                        <a href="">
                            <i class="btn btn-info">DELETE</i>
                        </a>

                      
                    </form>
                </td>
                @endforeach
            </tr>
    
    </table>


    </div>

   
@endsection