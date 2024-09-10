@extends('layout')

@section('body')
<link rel="stylesheet" href="{{ asset('css/mans.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<div class="container mt-5">
    <h2 class="text-center mb-5">Men's Clothing</h2>
    <div class="row">
        @forelse($men as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $product->photo }}" alt="{{ $product->name }}" class="card-img-top img-fluid">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">Price: {{ $product->price }} EPG</p>
                        <div class="mt-auto">
                            <a href="{{ url('/prod', $product->id) }}" class="btn btn-primary w-100 add-to-cart" data-product="{{ $product->name }}">Add to Cart</a>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default action of the link
                Swal.fire({
                    title: 'Added to Cart',
                    text: `The product "${this.getAttribute('data-product')}" has been added to your cart.`,
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = this.href; // Redirect after the alert is closed
                });
            });
        });
    });
</script>
@endsection
