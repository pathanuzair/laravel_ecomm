@extends('master/master')


@section('content')
<div class="custom-product">
  <div class="col-sm-4">
    <a href="#">Index</a>
  </div>
  <div class="col-sm-4">
    <div class="trending-wrapper">
    <h3>Searched Result of Products</h3>
        @foreach ($products as $item)
        <div class="searched-item">
          <a href="/detail/{{$item->id}}">
            <img src="{{$item->gallery}}" alt="Chania" class="trending-img">
            <div class="">
              <h3>{{$item->name}}</h3>
              <h5>{{$item->description}}</h5>
            </div>
        </a>
        </div>
        @endforeach
  </div>
  </div>
</div>
@endsection
