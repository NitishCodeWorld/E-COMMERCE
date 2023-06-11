<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopee || Home</title>
    <link rel="icon" type="image/x-icon" href="{{url('img/S.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    {{-- <link rel="stylesheet" href="{{url('css/preloader.css')}}"> --}}
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>
    <div class="container-fluid">
        @include('top_navigation_bar')

        
        <div class="row mb-5">
            <div class="col-12 col-md-12 m-0 p-0">
                <div class="frontImage">
                    <img src="img/shopping-frontPage.jpg" alt="Shopping image" width="100%">
                    <div id="frontPage-slogan">

                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <h1>GET STARTED<br>YOUR FAVOURITE SHOPPING</h1>
                              </div>
                              <div class="carousel-item">
                                <h1>SHOPPING HAS <br>ALWAYS BEEN A GREAT IDEA</h1>
                              </div>
                              <div class="carousel-item">
                                <h1>SHOP AND <br>LIVE YOUR DREAMS</h1>
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="fas fa-angle-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <span class="fas fa-angle-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row all-categories-info">
            <div class="col-12 col-md-12 m-0 p-0">
                <div>
                    <div class="all-categories-header">
                        <h2>TOP CATEGORIES</h2>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="row all-categories-info pb-5">
            <div class="col-md-2">
                <div class="all-categories-details">
                    <a href="{{ url('mensTshirt') }}">
                        <div class="all-categories-details-top">
                            <img src="{{url('img/tshirt.jpg')}}" alt="T-Shirt" height="200px" width="200px">
                        </div>
                        <div class="all-categories-details-bottom">
                            <h6 class="text-center">Men's T-Shirts</h6>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-2">
                <div class="all-categories-details">
                   <a href="{{ 'mensShirt' }}">
                    <div class="all-categories-details-top">
                        <img src="{{url('img/shirt.jpg')}}" alt="Shirts" height="200px" width="200px">
                    </div>
                    <div class="all-categories-details-bottom">
                        <h6 class="text-center">Men's Shirts</h6>
                    </div>
                   </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="all-categories-details">
                    <a href="#">
                        <div class="all-categories-details-top">
                            <img src="{{url('img/kids-wear.jpg')}}" alt="Kids Wear" height="200px" width="200px">
                        </div>
                        <div class="all-categories-details-bottom">
                            <h6 class="text-center">Kids Wear</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="all-categories-details">
                    <a href="#">
                        <div class="all-categories-details-top">
                            <img src="{{url('img/trousers.jpg')}}" alt="trousers" height="200px" width="200px">
                        </div>
                        <div class="all-categories-details-bottom">
                            <h6 class="text-center">Trousers</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="all-categories-details">
                    <a href="{{url('sarees')}}">
                        <div class="all-categories-details-top">
                            <img src="{{url('img/sarees.jpg')}}" alt="Sarees" height="200px" width="200px">
                        </div>
                        <div class="all-categories-details-bottom">
                            <h6 class="text-center">Sarees</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="all-categories-details">
                    <a href="#">
                        <div class="all-categories-details-top">
                            <img src="{{url('img/track-pants.jpg')}}" alt="Track Pants" height="200px" width="200px">
                        </div>
                        <div class="all-categories-details-bottom">
                            <h6 class="text-center">Track Pants</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>


        <div class="row all-categories-info pb-5">
            <div class="col-md-2">
                <div class="all-categories-details">
                    <a href="#">
                        <div class="all-categories-details-top">
                            <img src="{{url('img/tops.jpg')}}" alt="Tops" height="200px" width="200px">
                        </div>
                        <div class="all-categories-details-bottom">
                            <h6 class="text-center">Tops</h6>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-2">
                <div class="all-categories-details">
                    <a href="#">
                        <div class="all-categories-details-top">
                            <img src="{{url('img/trousers-women.jpg')}}" alt="Trousers-Women" height="200px" width="200px">
                        </div>
                        <div class="all-categories-details-bottom">
                            <h6 class="text-center">Trousers</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="all-categories-details">
                    <a href="#">
                        <div class="all-categories-details-top">
                            <img src="{{url('img/infant.jpg')}}" alt="Infant Wear" height="200px" width="200px">
                        </div>
                        <div class="all-categories-details-bottom">
                            <h6 class="text-center">Infant Wear</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="all-categories-details">
                    <a href="#">
                        <div class="all-categories-details-top">
                            <img src="{{url('img/children.jpg')}}" alt="Children Wear" height="200px" width="200px">
                        </div>
                        <div class="all-categories-details-bottom">
                            <h6 class="text-center">Children Wear</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="all-categories-details">
                    <a href="#">
                        <div class="all-categories-details-top">
                            <img src="{{url('img/girls-dress.jpg')}}" alt="girls-dress" height="200px" width="200px">
                        </div>
                        <div class="all-categories-details-bottom">
                            <h6 class="text-center">Dresses</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="all-categories-details">
                    <a href="#">
                        <div class="all-categories-details-top">
                            <img src="{{url('img/inner-wear.jpg')}}" alt="Inner Wears" height="200px" width="200px">
                        </div>
                        <div class="all-categories-details-bottom">
                            <h6 class="text-center">Inner Wears</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        @include('bottom_footer')
        
    </div>



    @include('webJavascript')
 
</body>