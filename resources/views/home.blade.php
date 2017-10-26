@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">SPECIAL FLOWERS</div>

            @if (Session::has('status'))
                <div class="alert alert-success"> {!! Session::get('status') !!} </div>
            @endif
               
            <div id="fh5co-main">      
                <div class="fh5co-cards">
                    <div class="container-fluid">
                        <div class="row" style="margin-top: -100px;">
                            @foreach($products as $product)
                                <div class="col-lg-3 col-md-6 col-sm-6 animate-box">
                                    <a class="fh5co-card" href="#">
                                        <img src="img/{{ $product -> image_path }}" alt="Free HTML5 Bootstrap template" class="img-responsive">
                                        <div class="fh5co-card-body">
                                            <h3>*{{ $product -> product_name }}</h3>
                                            <p>${{ $product -> price }}</p>
                                             <form method="POST" action="/home/add">
                                            {{ csrf_field() }}
                                                <input type="hidden" name="product_id" value="{{ $product -> product_id }}">
                                                <input type="hidden" name="product_name" value="{{ $product -> product_name }}">
                                                <input type="hidden" name="image_path" value="{{ $product -> image_path }}">
                                                <input type="hidden" name="price" value="{{ $product -> price }}">
                                                <input type="hidden" name="customer_id" value="{{ Auth::user() ->id }}">
                                                <div id="add">
                                                    <button type="submit" class="btn btn-success">Add to Cart<i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </a>
                                </div>
                            @endforeach 
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</div>
@endsection
