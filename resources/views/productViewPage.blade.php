<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopee || Product</title>
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
            <div class="col-12 col-md-5">
                <div class="selected_image">
                    <img src="{{ asset('product_images/'.$collection->image) }}" alt="Product Image" height="500px" width="90%">
                </div>
                <div class="select_cart_or_buy">
                    <a href="add_to_cart/{{$collection->id}}" id="addToCartBtn">
                        <button class="btn btn-outline-warning">Add To Cart</button>
                    </a>
                    <a href="#">
                        <button class="btn btn-outline-danger">Buy Now</button>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-7">
                <div class="selected_image_details">
                    <h4 id="selected_brand">{{$collection->brand}}</h4>
                    <h3 id="seleted_product">{{$collection->category_name}} {{$collection->subCategory_name}}</h3>
                    <p id="special_price">Special Price</p>
                    <span id="selected_sp">Rs.{{$collection->selling_price}}</span>
                    <span style="color: grey; font-size: 13px;"><del>Rs.{{$collection->mrp}}</del></span>
                    <span style="color: green; font-weight: bold; font-size: 13px;">{{$collection->discountPer}}% off</span>
                    <hr><div class="product_detail">
                        <h1>Product Details <span class="prod_detail_expand" onclick="showProductDetail()">+</span></h1>
                        <p id="prod_full_detail">{{$collection->description}}</p>
                    </div><hr>
                </div>
            </div>
        </div>


        @include('bottom_footer')
    </div>

    @include('webJavascript')
</body>