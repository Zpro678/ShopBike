@extends('layouts.user.app')
@section('title','Bike Shop a Ecommerce Category Flat Bootstarp Responsive Website Template| 404 Error :: w3layouts')
@section('main')
<div class="404-page">
	 <div class="container">
		 <div class="error-head">
			 <h1>4<label>0</label>4</h1>
			 <span>ERROR</span>
			 <h2>Ooops....!This page is not found.</h2>
			 <a href="{{route('user.index.index')}}">Go Back {{ $ip }}</a>
		 </div>
	 </div>
</div>
@endsection