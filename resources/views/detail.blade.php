@extends('master')
@section("content")
<div class="container">
<div class="row">
<div class="col-sm-6">
<!-- <img src="{{$product['gallery']}}" alt=""> -->
<img class="trending-image" src="{{url('images')}}/{{$item->gallery}}">
</div>
<div class="col-sm-6">
</div>
</div>
</div>
@endsection