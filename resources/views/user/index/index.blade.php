@extends('layouts.user.app')
@section('css')
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
@section('title','Bike Shop a Ecommerce Category Flat Bootstarp Responsive Website Template| Home :: w3layouts')

@section('main')
@include('user.index.partials_index.banner');
<!-- @include('user.index.partials_index.bikes'); -->
@include('user.index.partials_index.bikes', ['popular' => $popular, 'newArrivals' => $newArrivals])
@include('user.index.partials_index.contact');
@endsection