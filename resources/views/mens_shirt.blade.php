<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopee || Men's Shirts</title>
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
        <div class="row mb-5">
            @foreach ($collection as $item)    
            <div class="col-12 col-md-2">
                <a href="productView/{{$item->id}}">
                    
                    <div class="card bg-light">
                        <div class="card-top">
                            <img src="{{ asset('product_images/'.$item->image) }}" alt="Men's t-shirt" width="192px">
                        </div>
                        <div class="card-bottom">
                            <h6 id="brand_name">{{ $item->brand }}</h6>
                            <p class="mb-0">{{ $item->category_name}} {{ $item->subCategory_name}}</p>
                            <span>Rs.{{ $item->selling_price }}</span>
                            <span style="color: grey; font-size: 13px;"><del>Rs.{{ $item->mrp }}</del></span>
                            <span style="color: green; font-weight: bold; font-size: 13px;">{{ $item->discountPer }}% off</span>
                        </div>
                    </div>
                    
                </a>
            </div>
            @endforeach
        </div>


        @include('bottom_footer')
    </div>

    @include('webJavascript')
</body>