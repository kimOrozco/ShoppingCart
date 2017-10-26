@extends('layouts.app')

@section('title')
	Shopping Cart
@endsection

@section('content')
	<div class="row">
		<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
			<ul class="list-group">
				@foreach($carts as $cart)
					<table>
						<tr>
							<td> <div class="image"><img src="img/{{ $cart -> image_path }}"></div> </td>
							<td> {{ $cart -> $product_name }} </td>
							<td> {{ $cart -> $price }}</td>
						</tr>

					</table>
				@endforeach

@endsection
