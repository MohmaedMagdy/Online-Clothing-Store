<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/dash.css') }}">
</head>

<body>
    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Our Products</h1>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Category</th>
                            <th scope="col">Photo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($product as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price }}/EPG</td>
                                <td>{{ $item->category }}</td>
                                <td>
                                    <img src="{{ asset($item->photo) }}" style="width: 100px; height: 100px;" class="img img-responsive" alt="{{ $item->name }}" />
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No products found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="d-grid gap-2 col-6 mx-auto mt-4">
                    <a href="{{ url('/orders') }}" class="btn btn-primary btn-lg">Customer Requests</a>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto mt-4">
                    <a href="{{ url('/add') }}" class="btn btn-success btn-lg">Add Product</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
