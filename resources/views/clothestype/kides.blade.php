@extends('layout')

@section('body')
<div class="container mt-5">
    <h2 class="text-center mb-5">Kide`s Clothing</h2>
    <div class="row">
        @forelse($children as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $product->photo }}" alt="{{ $product->name }}" class="card-img-top img-fluid">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">Price: {{ $product->price }} EPG</p>
                        <div class="mt-auto">
                            <a href="{{ url('/prod', $product->id) }}" class="btn btn-primary w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center">No products found in this category.</div>
            </div>
        @endforelse
    </div>
</div>
@endsection
