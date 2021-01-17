@extends('shop.master')
@section('title')
Shopping Cart
@endsection

@section('content')
  <div class="row">
 @foreach($products ?? ''->chunk(3) as $productChunk)
  <div class="col-sm-6 col-md-4">
  @foreach($productChunk as $product)
      <div class="thumbnail">
        <a href="/img/temaki.jpg"></a>
          <img src="{{$product->imagePath}}" class="img-responsive">
          <div class="caption">
          <h2>{{$product->name}}</h2>
          <div class="clearfix">
          <div class="pull-left price">RM{{$product->price}}</div>
          <a href="{{route('product.addToCart', ['id'=> $product ?? 'id'])}}" class="btn btn-success pull-right" role="button">Add to Cart</a>
          </div>
          </div>
      </div>
      </div>
     @endforeach
    </div>
@endforeach
@endsection