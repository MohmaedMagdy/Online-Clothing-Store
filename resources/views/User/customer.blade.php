<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Order Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/customer.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header text-center">
        <h1 class="card-title">Order Form</h1>
      </div>
      <div class="card-body">
        <form id="orderForm" action="{{ url('/form') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group mb-4">
            <label for="client_name" class="form-label">Client Name</label>
            <input id="client_name" type="text" name="client_name" value="{{ old('client_name') }}" class="form-control @error('client_name') is-invalid @enderror" required>
            @error('client_name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          @if($cart)
            @foreach($cart as $id => $details)
              <div class="mb-4">
                <h5>Product {{ $loop->iteration }}</h5>
                <div class="form-group mb-3">
                  <label for="product_{{ $id }}" class="form-label">Product</label>
                  <input id="product_{{ $id }}" type="text" name="products[{{ $id }}][name]" value="{{ $details['name'] }}" class="form-control" readonly>
                </div>
                
                <div class="form-group mb-3">
                  <label for="quantity_{{ $id }}" class="form-label">Quantity</label>
                  <input id="quantity_{{ $id }}" type="number" name="products[{{ $id }}][quantity]" value="{{ $details['quantity'] }}" class="form-control" readonly>
                </div>
                
                <div class="form-group mb-3">
                  <label for="total_price_{{ $id }}" class="form-label">Total Price</label>
                  <input id="total_price_{{ $id }}" type="number" step="0.01" name="products[{{ $id }}][total_price]" value="{{ $details['price'] * $details['quantity'] }}" class="form-control" readonly>
                </div>
                
                <div class="form-group mb-3">
                  <label for="photo_{{ $id }}" class="form-label">Photo</label></br>
                  <input type="hidden" name="products[{{ $id }}][photo]" value="{{ $details['photo'] }}">
                  <img src="{{ asset($details['photo']) }}" width="150" height="150" class="img-fluid" alt="{{ $details['name'] }}" />
                </div>
              </div>
            @endforeach
          @endif
          <div class="form-group mb-4">
            <label for="payment" class="form-label">Payment Method</label>
            <select id="payment" name="payment" class="form-select @error('payment') is-invalid @enderror" required>
              <option value="credit_card" {{ old('payment') == 'credit_card' ? 'selected' : '' }}>Credit Card</option>
              <option value="paypal" {{ old('payment') == 'paypal' ? 'selected' : '' }}>PayPal</option>
              <option value="bank_transfer" {{ old('payment') == 'bank_transfer' ? 'selected' : '' }}>Bank Transfer</option>
            </select>
            @error('payment')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
  <script>
    document.getElementById('orderForm').addEventListener('submit', function(event) {
      event.preventDefault(); 
      Swal.fire({
        title: 'Success!',
        text: 'Your order has been placed.',
        icon: 'success',
        confirmButtonText: 'OK'
      }).then((result) => {
        if (result.isConfirmed) {
          this.submit(); 
        }
      });
    });
  </script>
</body>
</html>
