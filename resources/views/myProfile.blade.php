<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopee || Profile</title>
    <link rel="icon" type="image/x-icon" href="{{url('img/S.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&family=Roboto+Slab&family=Rubik:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('css/productsPage.css')}}">
    <link rel="stylesheet" href="{{url('css/profilePage.css')}}">
</head>

<body>
    <div class="container-fluid">
        @include('top_navigation_bar')

        <div class="container-fluid">
            <div class="row">
                @foreach ($Currentuser as $user)

                <div class="col-12 col-md-3 p-0">
                    <div class="profile-left-top">
                        <div class="avatar">
                            <i class="fas fa-user-tie"></i>
                        </div>

                        <div class="name">
                            <h4>Account</h4>
                            <p>{{$user->name}}</p>
                        </div>
                    </div>
                    <div class="profile-left-bottom">
                        <ul>
                            <a href="{{$user->id}}">
                                <li class="list-head active"><i class="fas fa-user"></i> ACCOUNT INFORMATION</li>
                            </a>
                            <a href="#">
                                <li class="list-head"><i class="fas fa-sort-amount-up"></i> MY ORDERS</li>
                            </a>
                            <li class="list-head"><i class="fas fa-rupee-sign"></i> PAYMENTS</li>
                            <ul>
                                <a href="#">
                                    <li class="list-inside"><i class="fab fa-cc-visa"></i> Saved Cards</li>
                                </a>
                            </ul>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-9 p-0">
                    <div class="profile-right" id="show-details-form">
                        <h5>Profile Details</h5>
                        <hr>
                        <form>
                            <p><span class="field-name">Full Name</span> &nbsp;&emsp;<span class="field-value">{{ $user->name }}</span></p>

                            <p><span class="field-name">Mobile No.</span> &emsp;<span class="field-value">{{$user->phone}}</span></p>

                            <p><span class="field-name">Email Id</span> &ensp;&ensp;&emsp;<span class="field-value">{{ $user->email }}</span></p>

                            <p><span class="field-name">Gender</span> &ensp;&nbsp;&ensp;&emsp;<span class="field-value">{{ $user->gender }}</span></p>

                            <p><span class="field-name">DOB</span> &emsp;&emsp;&ensp;&emsp;<span class="field-value">{{$user->dob}}</span></p>

                            <p><span class="field-name" style="vertical-align: top">Address</span> &ensp;&emsp;<textarea rows="3" cols="40" class="field-value" id="address" readonly>{{$user->default_address}}</textarea></p>

                            <p><span class="field-name">PIN</span> &emsp;&emsp;&ensp;&emsp;&nbsp;<span class="field-value">{{$user->pin}}</span></p>

                            <p><span class="field-name">Alt. number</span> <span class="field-value">{{$user->alt_phone}}</span></p>

                            <input type="button" value="Edit Details" class="btn btn-warning" id="edit-btn">
                        </form>
                    </div>

                    <div class="profile-right" id="edit-details-form">
                        <h5>Edit Details</h5>
                        <hr>
                        <form action="{{$user->id}}" method="POST">
                            @csrf
                            <p><span class="field-name">Full Name</span> &nbsp;&emsp;<span class="field-value">
                                <input type="text" name="name" class="form-control" value="{{$user->name}}">
                            </span></p>

                            <p><span class="field-name">Mobile No.</span> &emsp;<span class="field-value">
                                <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
                            </span></p>

                            <p><span class="field-name">Email Id</span> &ensp;&ensp;&emsp;<span class="field-value">
                                <input type="email" name="email" class="form-control" value="{{$user->email}}">
                            </span></p>

                            <p><span class="field-name">Gender</span> &ensp;&nbsp;&ensp;&emsp;<span class="field-value"> 
                                <select name="gender" id="gender" class="form-control">
                                    <option disabled>--Select gender</option>
                                    <option value="Male" selected>Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>
                            </span></p>

                            <p><span class="field-name">DOB</span> &emsp;&emsp;&ensp;&emsp;<span class="field-value">
                                <input type="date" name="dob" id="dob" class="form-control" value="{{$user->dob}}">
                            </span></p>

                            <p><span class="field-name" style="vertical-align: top">Address</span> &ensp;&emsp;
                                <input type="text" name="default_address" class="field-value form-control" value="{{$user->default_address}}">
                            </p>

                            <p><span class="field-name">PIN</span> &emsp;&emsp;&ensp;&emsp;&nbsp;<span class="field-value">
                                <input type="text" name="pin" class="form-control" value="{{$user->pin}}">
                            </span></p>

                            <p><span class="field-name">Alt. number</span> <span class="field-value">
                                <input type="text" name="alt_phone" class="form-control" value="{{$user->alt_phone}}">
                            </span></p>

                            <input type="submit" value="Save Details" class="btn btn-success" id="save-btn">
                        </form>
                    </div>
                </div>
                                            
                @endforeach
            </div>
        </div>


        @include('bottom_footer')
    </div>

    @include('webJavascript')
</body>