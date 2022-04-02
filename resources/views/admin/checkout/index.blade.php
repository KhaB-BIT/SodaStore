@extends('admin.layout')
@section('title','Checkout | SODA STORE')
@section('content')
    @include('admin.checkout.checkout')
    @include('admin.checkout.js-fix')
    @include('admin.checkout.paypal')
@endsection





