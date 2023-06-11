<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('css/registrationLogin.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="login mt-5">
                    <form action="{{ route('adminAuthenticate') }}" method="POST">
                        @csrf

                        <div class="form-group" id="form-login-heading">
                            <h1>Admin Login</h1>
                        </div>

                        @if (Session::has('error'))
                            <div class="alert alert-danger text-center mt-3 mx-3" role="alert">
                                <p>{{ Session::get('error') }}</p>
                            </div>
                        @endif

                        <div class="form-group input-field mt-3  mb-0">
                            <label for="email">Email</label>
                            <label class="float-right"><b>New member?</b><a href="{{ 'admin_registration' }}" class="btn btn-primary btn-sm ml-2"> Sign Up</a></label>
                            <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Doe@example.com">
                        </div>
                        @error('email')
                            <p style="color:red;">* {{ $message }}</p>
                        @enderror

                        <div class="form-group input-field mt-3 mb-0">
                            <label for="pass">Password</label>
                            <input type="password" name="password" id="pass" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password">
                        </div>
                        @error('password')
                            <p style="color: red;">* {{$message}}</p>
                        @enderror

                        <div class="form-group input-field mt-3 pb-3">
                            <input type="submit" name="login" value="Login" class="form-control btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>