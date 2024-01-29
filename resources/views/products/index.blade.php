@extends('layouts.app')
@section('content')
    <style>
        @media (max-width: 767.98px) {
            .border-sm-start-none {
                border-left: none !important;
            }
        }
    </style>

    @foreach ($products as $product)
        <section style="background-color: #eee;">
            <div class="container py-2">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-xl-10">
                        <div class="card shadow-0 border rounded-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                        <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                            <img src="{{ $product['image'] }}" class="w-100" />
                                            <a href="#!">
                                                <div class="hover-overlay">
                                                    <div class="mask"
                                                        style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <h5>{{ $product['title'] }}</h5>
                                        <div class="d-flex flex-row">
                                            <span>Rate: {{ $product['rating']['rate'] }}
                                                ({{ $product['rating']['count'] }})
                                            </span>
                                        </div>

                                        <p class="mb-4 mb-md-0">
                                            {{ $product['description'] }}
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                        <div class="d-flex flex-row align-items-center mb-1">
                                            <h4 class="mb-1 me-1">${{ number_format($product['price'], 2) }}</h4>
                                        </div>
                                        <h6 class="text-success">Free shipping</h6>
                                        <div class="d-flex flex-column mt-4">
                                            <a class="btn btn-primary btn-sm" type="button"
                                                href="{{ route('products.show', $product['id']) }}">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
