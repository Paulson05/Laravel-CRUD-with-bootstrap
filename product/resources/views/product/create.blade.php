@extends('product.layout')

@section('content')
<br><br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Addd New Product </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/product/index" title="Create a product"> Back<i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
       

    </div>
    <form action="" method="POST" enctype= "multipart/form-data" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>product name</strong>
                    <input type="text" name="product_name" class="form-control" placeholder="product name">
                </div>
                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>product code</strong>
                    <input type="text" name="product_code" class="form-control" placeholder="product code">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Details:</strong>
                    <textarea class="form-control" style="height:150px" name="details"
                        placeholder="Details"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>product code</strong>
                    <input type="file" name="logo" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
   
@endsection