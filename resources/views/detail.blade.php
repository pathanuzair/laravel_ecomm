@extends('master/master')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <img class="detail-img" src="{{$product->gallery}}">
    </div>
    <div class="col-sm-6">
      <a href="{{url('/')}}">Go Back</a>
      <h1>Name : {{$product->name}}</h1>
      <h2>Price : {{$product->price}}</h2>
      <h4>Category : {{$product->name}}</h4>
      <h4>Description : {{$product->description}}</h4>
      <br>
      <button class="btn btn-success">Add to cart</button> 
      <br><br>
      <button class="btn btn-primary">Buy Now</button>
    </div>
  </div>
</div>
@endsection
