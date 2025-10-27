@extends('layouts.user.app')
@section('title','Bike Shop a Ecommerce Category Flat Bootstarp Responsive Website Template| Bicycles :: w3layouts')
@section('main')
<!--/banner-->
<div class="bikes">

    <div class="mountain-sec">
        <h2>MOUNTAIN BIKES</h2>
        @include('user.bicycles.partials_bicycles.moutainBike')
        <div class="clearfix"></div>
    </div>
    <div class="singlespeed-sec">
        <h2>SINGLE SPEED-BIKES</h2>
        @include('user.bicycles.partials_bicycles.singleSpeedBike')
        <div class="clearfix"></div>
    </div>
    <div class="road-sec">
        <h2>ROAD-BIKES</h2>
        @include('user.bicycles.partials_bicycles.roadBike')
        <div class="clearfix"></div>
    </div>
</div>
</div>
@endsection