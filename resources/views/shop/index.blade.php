@extends('layouts.master')

@section('title')
    E Shop
@endsection
@section('content')
    @foreach($products->chunk(3) as $productChunck)
        <div class="row">
            @foreach($productChunck as $product)
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{{$product->imagePath}}" alt="..." class="img-responsive">
                            <div class="caption">
                                <h3>{{$product->title}}</h3>
                                <p class="description">{{$product->description}}</p>
                                <div class="clearfix">
                                    <div class="pull-left price">Rp {{$product->price}}</div>
                                    <a href="#" class="btn btn-success pull-right" role="button">Add to cart</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
        @endforeach
                </div>
    @endforeach

@endsection
