<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopee || Cart</title>
    <link rel="icon" type="image/x-icon" href="{{url('img/S.png')}}">
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
</head>

<body>
    <div class="container-fluid">
        @include('top_navigation_bar')

        <div class="row">
            <div class="col-12 col-md-8 border-right">
                <div id="deliveryAddress">
                    <h5>Select Delivery Address</h5>
                    <button class="btn btn-outline-info btn-sm float-right" data-toggle="modal"
                        data-target="#exampleModal" id="topAddAddr">Add Address</button>
                       
                    <button class="btn btn-outline-info btn-sm float-right mr-2" id="showSecondAddr">Show
                        Address</button>

                    <p>DEFAULT ADDRESS</p>
                    <div id="address-area">
                        <input type="radio" name="confirm_address">
                        <span>{{$Currentuser->name}}</span><button>Home</button>
                        <p>Address - {{$Currentuser->default_address}}</p>
                        <p>PIN - {{$Currentuser->pin}}</p>
                        <p>Mobile No. - {{$Currentuser->phone}}</p>
                        {{-- Below button targets Modal 2 --}}
                        <p class="ml-0"><button class="btn btn-sm" data-toggle="modal"
                                data-target="#exampleModal2">Edit</button></p>
                    </div>
                    <div id="secondAddressArea" class="mt-5">

                    </div>

                </div>
            </div>

            <div class="col-12 col-md-4 mt-5">
                <div id="payment-info">
                    <h6>PRICE DETAILS</h6>
                    <hr>
                    <p>Total MRP <span class="float-right">Rs.{{ $sumMRP }}</span></p>
                    <p>Total Discount <span class="float-right">Rs.{{ $sumDiscount }}</span></p>
                    <p>Delivery Charge <span class="float-right">Rs.{{ $delivery }}</span></p>
                    <hr>
                    <p id="totalAmt">Total Amount Payable <span class="float-right">Rs.{{ $totalPayable }}</span></p>
                    <a href="#" id="place-order">
                        <button>Confirm</button>
                    </a>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" style="font-family: 'Rubik', sans-serif;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <form id="second_address_form">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="background-color: antiquewhite">Add
                                Address</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h6>Contact Details</h6>
                            <div class="form-group" style="font-size: 13px;">
                                <label for="name2" class="mb-0">Name</label>
                                <input type="text" id="name2" name="name2" class="form-control mb-2"
                                    placeholder="Name *" style="font-size: 13px;">
                                <label for="phone2" class="mb-0">Mobile No.</label>
                                <input type="text" id="phone2" name="phone2" class="form-control mb-5"
                                    placeholder="Mobile No. *" style="font-size: 13px;">
                            </div>
                            <div class="form-group" style="font-size: 13px;">
                                <label for="second_address">Address</label>
                                <input type="text" id="second_address" name="second_address" class="form-control mb-1"
                                    placeholder="Enter Address *" style="font-size: 13px;">
                                <input type="text" id="pin2" name="pin2" class="form-control mb-1" placeholder="PIN *"
                                    style="font-size: 13px;">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="submit-btn1" class="btn btn-primary"
                                style="width: 100%;">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- Modal 2-->
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" style="font-family: 'Rubik', sans-serif;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <form action="{{url('checkoutDefaultAddress')}}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="background-color: antiquewhite">Edit
                                Address</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h6>Contact Details</h6>
                            <div class="form-group" style="font-size: 13px;">
                                <label for="name" class="mb-0">Name</label>
                                <input type="text" id="name" name="name" class="form-control mb-2" placeholder="Name *"
                                    style="font-size: 13px;" value="{{$Currentuser->name}}" disabled>
                                <label for="phone" class="mb-0">Mobile No.</label>
                                <input type="text" id="phone" name="phone" class="form-control mb-5"
                                    placeholder="Mobile No. *" style="font-size: 13px;" value="{{$Currentuser->phone}}">
                            </div>
                            <div class="form-group" style="font-size: 13px;">
                                <label for="addressField">Address</label>
                                <input type="text" name="default_address" class="form-control mb-1"
                                    placeholder="Enter Address *" style="font-size: 13px;"
                                    value="{{$Currentuser->default_address}}">
                                <input type="text" name="pin" class="form-control mb-1" placeholder="PIN *"
                                    style="font-size: 13px;" value="{{$Currentuser->pin}}">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" style="width: 100%;">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

    @include('webJavascript')
</body>