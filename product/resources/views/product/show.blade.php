@extends('product.layout')

@section('content')
<br><br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>show  Product </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/product/index" title="Create a product"> Back<i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>product name</strong>
                    {{$data ->product_name}}
                </div>
                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>product code</strong>
                    {{$data ->product_code}}
                </div>
                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>product Details</strong>
                    {{$data ->details}}
                </div>
                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>product image</strong>
                    <img  src = "{{url("{$data->logo}")}}" height= "70px;" width = "80px;">
                </div>
                
            </div>
       

    </div>

    @endsection