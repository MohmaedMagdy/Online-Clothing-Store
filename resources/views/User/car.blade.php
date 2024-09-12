@extends('layout')
@section('body')
<link rel="stylesheet" href="{{ asset('css/car.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<div class="container">
    <div class="row">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">Name</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity']; @endphp
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-3 hidden-xs">
                                        <img src="{{ asset($details['photo']) }}" width="100" height="100" class="img-responsive" alt="{{ $details['name'] }}" />
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">{{ $details['name'] }}</h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">{{ number_format($details['price'], 2) }} EPG</td>
                            <td data-th="Quantity">
                                <form action="{{ url('/update-shopping') }}" method="POST" class="update-form">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id" value="{{ $id }}">
                                    <input type="number" name="quantity" value="{{ $details['quantity'] }}" class="form-control text-center" min="1">
                                </form>
                            </td>
                            <td data-th="Subtotal" class="text-center">{{ number_format($details['price'] * $details['quantity'], 2) }} EPG</td>
                            <td class="actions" data-th="">
                                <form action="{{ url('/delete-shopping') }}" method="POST" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $id }}">
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-right">
                        <h3><strong>Total {{ number_format($total, 2) }} EPG</strong></h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right">
                        <a href="{{ url('/welcome') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Continue Shopping</a>
                        <a id="checkout-btn" href="#" class="btn btn-primary">Check out</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.update-form input[name="quantity"]').forEach(input => {
            input.addEventListener('change', function() {
                const form = this.form;
                Swal.fire({
                    title: 'Update quantity?',
                    text: 'Are you sure you want to update the quantity?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, update it!',
                    cancelButtonText: 'No, cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); 
                    }
                });
            });
        });
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, keep it'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); 
                    }
                });
            });
        });
        const checkoutBtn = document.getElementById('checkout-btn');
        checkoutBtn?.addEventListener('click', function(event) {
            event.preventDefault(); 
            const cartIsEmpty = @json(count(session('cart')) === 0);

            if (cartIsEmpty) {
                Swal.fire({
                    title: 'Your cart is empty!',
                    text: 'Please add items to your cart before checking out.',
                    icon: 'warning',
                    showCancelButton: false,
                    confirmButtonText: 'OK'
                });
            } else {
                Swal.fire({
                    title: 'Proceed to checkout?',
                    text: 'Are you sure you want to check out?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, proceed',
                    cancelButtonText: 'No, cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ url('/check') }}";
                    }
                });
            }
        });
    });
</script>


@endsection
