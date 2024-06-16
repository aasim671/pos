<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
        }

        .login-container {
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
                <div class="login-container">
                    <h2 class="mb-4">Login to Your Account</h2>
                    <form action="{{ url('/login') }}" method="POST">
                        @csrf
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach
                        @endif

                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email address" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </form>
                    <hr>
                    <p class="text-center">Don't have an account? <a href="{{ url('/') }}">Register</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
