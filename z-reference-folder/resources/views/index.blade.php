@extends('layouts.master')
@section('content')
 <!-- container --> 
  <section class="showcase">
    <div class="container">
      <div class="pb-2 mt-4 mb-2 border-bottom">
        <h2>JAZZCASH Payment Gateway in Laravel - Home Page</h2>
      </div>
      
      <div class="row">

@foreach ($products as $product)	  
	<div class="col-lg-3 col-md-3 mb-3">
		<div class="card h-100">
			<a href="#"><img src="{{ asset('storage/'.$product->image) }}" class="card-img-top"></a>
			<div class="card-body">
				<h4 class="card-title"><a href="#">{{ $product->name }}</a></h4>
				<h5>₹{{ $product->price }}</h5>
				<p class="card-text">{{ $product->description }}</p>
			</div>
			<div class="card-footer text-right">
				<a href="checkout/{{ $product->product_id }}" class="add-to-cart btn-success btn btn-sm" title="Add to Cart"><i class="fa fa-shopping-cart fa-fw"></i> Buy Now</a>
			</div>
		</div>
	</div>
@endforeach


    </div>
    </div>
  </section>
    
	@stop