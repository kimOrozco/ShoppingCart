@extends('layouts.app')

@section('title')
	Shopping Cart
@endsection
@section('content')

<?php $total_amount = 0; ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                	@foreach ($products as $product)
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="/img/{{ $product -> image_path }}" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">{{ $product -> product_name }}</a></h4>
                                <h5 class="media-heading"> by <a href="#">{{ $product -> product_id }}</a></h5>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="{{ $product -> quantity }}">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>${{ $product -> price }}</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$
                        	<?php
                        		$price = $product -> price;
                        		$quantity = $product -> quantity;
                        		$subtotal = $price * $quantity;
                        		$total_amount += $subtotal;
                        		echo $subtotal;
                        	?>
                        </strong></td>
                        <td class="col-sm-1 col-md-1">
                        <form method="post" action="/home/delete/{{$product -> product_id}}">
							{{ csrf_field() }}
							<input type="hidden" name="customer_id" value="{{ Auth::user() -> id }}">
							<button type="submit" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button>
						</form>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>${{ $total_amount }}</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong>$<?php $shipping = 3; echo $shipping; ?></strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>$<?php $final_amount = $total_amount + $shipping; echo $final_amount; ?></strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <a type="button" class="btn btn-default" href="{{ url('/home') }}">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </a></td>
                        <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

