@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <img src="{{ $product['image'] }}" class="img-thumbnail p-4 bg-white" />

            </div>
            <div class="col-md-8">
                <div class="product">
                    <p class="py-2">{{ $product['category'] }}</p>
                    <h2 class="py-2">{{ $product['title'] }}</h2>
                    <h2 class="py-2">${{ number_format($product['price'], 2) }}</h2>
                    <p class="desc py-2">{{ $product['description'] }}</p>
                    <div class="buttons">
                        <button class="btn btn-primary btn-sm">Add to Cart</button>
                        <button class="btn btn-primary btn-sm"><span>♥</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
