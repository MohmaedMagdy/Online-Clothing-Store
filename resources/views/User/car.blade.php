<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/car.css') }}">

</head>
<body>
    @extends('layout')
    @section('body')
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    
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
                                    <form action="{{ url('/update-shopping') }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="id" value="{{ $id }}">
                                        <input type="number" name="quantity" value="{{ $details['quantity'] }}" class="form-control text-center" min="1" onchange="this.form.submit()">
                                    </form>
                                </td>
                                <td data-th="Subtotal" class="text-center">{{ number_format($details['price'] * $details['quantity'], 2) }} EPG</td>
                                <td class="actions" data-th="">
                                    <form action="{{ url('/delete-shopping') }}" method="POST">
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
                            <a href="{{ url('/check') }}" class="btn btn-primary">Check out</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    @endsection
</body>
</html>