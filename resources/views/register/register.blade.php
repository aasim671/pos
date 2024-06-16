<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
        }

        .register-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="register-container">
                    <h2 class="mb-4">Create Your Account</h2>
                    <form action="{{ '/store' }}" method="POST">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        @endif
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" id="fname" placeholder="Full Name"
                                name="fname">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Email address">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                                placeholder="Confirm Password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </form>
                    <hr>
                    <p class="text-center">Already have an account? <a href="{{ url('/login') }}">Log in</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
