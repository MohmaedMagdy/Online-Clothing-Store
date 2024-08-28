<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center mb-5">Customer Orders</h2>

        <!-- Success message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Orders Table -->
        <table class="table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Client Name</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Payment Method</th>
                    <th>Photo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->client_name }}</td>
                        <td>{{ $order->product }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ number_format($order->total_price, 2) }} EPG</td>
                        <td>{{ ucfirst($order->payment) }}</td>
                        <td>
                            @if($order->photo)
                                <img src="{{ asset($order->photo) }}" width="50" height="50" class="img-fluid mb-1" />
                            @else
                                No Image
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
