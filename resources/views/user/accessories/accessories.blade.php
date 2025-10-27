@extends('layouts.user.app')
@section('title','Bike Shop a Ecommerce Category Flat Bootstarp Responsive Website Template| Accessories :: w3layouts')
@section('main')
<!--/banner-->
<div class="parts">
	 <div class="container">
		 <h2>BIKE-ACCESSORIES</h2>
		 <div class="bike-parts-sec">
		
				<!-- product -->
					@include('user.accessories.products')

					 <!-- sidebar -->
						 @include('user.accessories.sidebar')

					<div class="clearfix"></div>
			 </div>
		 </div>
		 
		
				 
@endsection
