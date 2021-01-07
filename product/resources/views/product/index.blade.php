@extends('product.layout')

@section('content')
<br><br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="" title="Create a product"> create new product<i class="fas fa-plus-circle"></i>
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
                <td>shit</td>
                <td>3424765</td>
                <td>yugyugyugygfygyhgyggit</td>
                <td></td>
                <td>
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
            </tr>
    
    </table>


    </div>

   
@endsection