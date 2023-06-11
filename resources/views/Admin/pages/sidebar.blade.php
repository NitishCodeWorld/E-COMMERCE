<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-2 p-0 m-0">
            <div class="sidebar">
                <div class="sidebar-top">
                    <span><img src="{{url("img/hamburger.png")}}" alt="hamburger" height="30px" width="30px"></span>
                    <a href="{{url('dashboard')}}"><span><img src="{{url("img/logo.png")}}" alt="logo"
                                height="50px" width="120px"></span></a>
                </div>

                <div id="sidebar-bottom">
                    <nav>
                        <a href="{{url('dashboard')}}" id="active"><i class="fas fa-tachometer-alt"></i> <span
                                class="ml-3">Dashboard</span></i></a>

                        <a href="javascript:void(0)" onclick="showMenu()"><i class="fas fa-certificate"></i> <span
                                class="ml-1">Category</span> <i id="drop" class="fas fa-angle-right"></i></a>
                        <div id="submenu">
                            <a href="{{url('admin/addcategory')}}"><i class="far fa-circle"></i> <span class="ml-2">Add
                                    Catagory</span></a>
                        </div>

                        <a href="javascript:void(0)" onclick="showMenu1()"><i class="fab fa-product-hunt"></i> <span
                                class="ml-1">Product</span> <i id="drop1" class="fas fa-angle-right"></i></a>
                        <div id="submenu1">
                            <a href="javascript:void(0)"><i class="far fa-circle"></i> <span class="ml-2">Add
                                    Product</span></a>
                            <a href="javascript:void(0)"><i class="far fa-circle"></i> <span class="ml-2">View
                                    Product</span></a>
                        </div>

                        <a href="javascript:void(0)" onclick="showMenu2()"><i class="fab fa-first-order"></i> <span
                                class="ml-1">Order</span> <i id="drop2" class="fas fa-angle-right"></i></a>
                        <div id="submenu2">
                            <a href="javascript:void(0)"><i class="far fa-circle"></i> <span class="ml-2">View
                                    Order</span></a>
                        </div>

                        <a href="javascript:void(0)" onclick="showMenu3()"><i class="fas fa-wifi"></i> Status <i
                                id="drop3" class="fas fa-angle-right"></i></a>
                        <div id="submenu3">
                            <a href="javascript:void(0)"><i class="far fa-circle"></i> <span class="ml-2">Add
                                    Status</span></a>
                            <a href="javascript:void(0)"><i class="far fa-circle"></i> <span class="ml-2">View
                                    Status</span></a>
                        </div>

                        <a href="javascript:void(0)" onclick="showMenu4()"><i class="fas fa-rupee-sign"></i> <span
                                class="ml-2">Payment</span> <i id="drop4" class="fas fa-angle-right"></i></a>
                        <div id="submenu4">
                            <a href="javascript:void(0)"><i class="far fa-circle"></i> <span class="ml-2">View
                                    Payment</span></a>
                        </div>

                        <a href="javascript:void(0)" onclick="showMenu5()"><i class="far fa-user"></i> <span
                                class="ml-1">User</span> <i id="drop5" class="fas fa-angle-right"></i></a>
                        <div id="submenu5">
                            <a href="javascript:void(0)"><i class="far fa-circle"></i> <span class="ml-2">Add
                                    User</span></a>
                            <a href="javascript:void(0)"><i class="far fa-circle"></i> <span class="ml-2">View
                                    User</span></a>
                        </div>

                        <a href="javascript:void(0)"><i class="fas fa-sign-in-alt"></i> Login</a>
                    </nav>
                </div>
            </div>
        </div>