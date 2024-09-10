<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>
    @if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Success!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        });
    </script>
    @endif

    <div class="container mt-5">
        <h1 class="my-4">Profile</h1>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Profile Information</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>Name:</strong> {{ $user->name }}
                    </li>
                    <li class="list-group-item">
                        <strong>Email:</strong> {{ $user->email }}
                    </li>
                    <li class="list-group-item">
                        <strong>Phone:</strong> {{ $user->phone }}
                    </li>
                    <li class="list-group-item">
                        <strong>Password:</strong> {{ $user->password }}
                    </li>
                </ul>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <h4 class="card-title">Actions</h4>
                <a href="{{ url('/update/' . $user->id) }}" class="btn btn-primary">Edit Profile</a>
                <form action="{{ url('/delete/' . $user->id) }}" method="POST" class="d-inline" id="delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" id="delete-btn">Delete Account</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteForm = document.getElementById('delete-form');
            const deleteBtn = document.getElementById('delete-btn');
            
            deleteForm.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        deleteForm.submit(); // Submit the form if confirmed
                    }
                });
            });
        });
    </script>
</body>
</html>
