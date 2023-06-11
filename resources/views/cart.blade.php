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
    <div class="container-fluid bg-light">
        @include('top_navigation_bar')

        <div class="row mt-5">  
            <div class="col-12 col-md-8 mt-5">
                @foreach ($cartProductJoin as $item)
                <div id="cart-info">
                    <div class="productInCart-left">
                        <img src="{{ asset('product_images/'.$item->image) }}" alt="Product Image" height="150px">
                    </div>
                    <div class="productInCart-right">
                        <h5 id="cartProdBrand">{{ $item->brand }}</h5>
                        <span id="cartProdDiscription">{{ $item->description }}</span>
                        <p>
                            <span id="selected_sp">Rs.{{ $item->selling_price }}</span>
                            <span style="color: grey; font-size: 13px;"><del>Rs.{{ $item->mrp }}</del></span>
                            <span style="color: green; font-weight: bold; font-size: 13px;">{{ $item->discountPer }}% off</span>
                            <div>
                                <a href="decrease_quantity/{{$item->product_id}}">
                                    <i class="fas fa-minus-circle"></i>
                                </a>
                                <input type="text" name="inputQuantity" id="QuantityValue" value="{{$item->quantity}}">
                                <a href="add_to_cart1/{{$item->product_id}}">
                                    <i class="fas fa-plus-circle"></i>
                                </a>
                            </div>
                            <p id="wishlist-remove">
                                <span class="btn btn-warning">
                                    <a href="#">MOVE TO WISHLIST</a>
                                </span>
                                <span class="btn btn-outline-danger">
                                    <a href="{{url('delete_cart_item/'.$item->product_id)}}">REMOVE</a>
                                </span>
                            </p>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
            

            <div class="col-12 col-md-4">
                <div id="payment-info">
                    <h6>PRICE DETAILS</h6><hr>
                    <p>Total MRP <span class="float-right">Rs.{{ $sumMRP }}</span></p>
                    <p>Total Discount <span class="float-right">Rs.{{ $sumDiscount }}</span></p>
                    <p>Delivery Charge <span class="float-right">Rs.{{ $delivery }}</span></p>
                    <hr>
                    <p id="totalAmt">Total Amount Payable <span class="float-right">Rs.{{ $totalPayable }}</span></p>
                    <a href="{{url('checkout')}}" id="place-order">
                        <button>PLACE ORDER</button>
                    </a>
                </div>
            </div>
            
        </div>


        @include('bottom_footer')
    </div>

    @include('webJavascript')
</body>