<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
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
                    <form action="" method="POST">
                        @csrf

                        <div class="form-group" id="form-register-heading">
                            <h1>SIGN UP</h1>
                        </div>

                        @if (Session::has('success'))
                            <div class="alert alert-success text-center mt-2 mx-3" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        <div class="form-group input-field mt-3 mb-0">
                            <label for="user">Username</label>
                            <label class="float-right"><b>Already a member?</b><a href="{{ route('login') }}" class="btn btn-primary btn-sm ml-2"> Log In</a></label>
                            <input type="text" name="name" id="user" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="John Doe">
                        </div>
                        @error('name')
                            <p>*{{ $message }}</p>
                        @enderror

                        <div class="form-group input-field mt-3  mb-0">
                            <label for="mail">Email</label>
                            <input type="email" name="email" id="mail" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="name@example.com" >
                        </div>
                        @error('email')
                            <p>*{{ $message }}</p>
                        @enderror

                        <div class="form-group input-field mt-3 mb-0">
                            <label for="pass">Password</label>
                            <input type="password" name="password" id="pass" class="form-control @error('password') is-invalid @enderror" >
                        </div>
                        @error('password')
                            <p>*{{ $message }}</p>
                        @enderror

                        <div class="form-group input-field mt-3 pb-3">
                            <input type="submit" name="register" value="SIGN UP" class="form-control btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>