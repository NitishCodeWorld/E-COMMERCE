@include('Admin.pages.header')
@include('Admin.pages.sidebar')
@include('Admin.pages.top_navigationBar')
                
<div class="container-fluid" style="margin-top: 80px">
               
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card1">
                                <div class="card1-left">
                                    <img src="{{url('img/online-order.png')}}" alt="online-order" height="80px" width="80px">
                                </div>
                                <div class="card1-right">
                                    <div class="card1-num">89</div>
                                    <div class="card1-title">Total Order</div>
                                    <div class="card1-per text-success"><i class="fas fa-arrow-up"></i> <span>3% (15 days)</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card1">
                                <div class="card1-left">
                                    <img src="{{url('img/online-order-2.png')}}" alt="online-order" height="80px" width="80px">
                                </div>
                                <div class="card1-right">
                                    <div class="card1-num">899</div>
                                    <div class="card1-title">Total Delivered</div>
                                    <div class="card1-per text-success"><i class="fas fa-arrow-up"></i> <span>8% (15 days)</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="row mt-4">
                        <div class="col-12 col-md-6">
                            <div class="card1">
                                <div class="card1-left">
                                    <img src="{{url('img/online-order-3.png')}}" alt="online-order" height="80px" width="80px">
                                </div>
                                <div class="card1-right">
                                    <div class="card1-num">59</div>
                                    <div class="card1-title">Total Cancelled</div>
                                    <div class="card1-per1 text-danger"><i class="fas fa-arrow-down"></i> <span>2% (15 days)</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card1">
                                <div class="card1-left">
                                    <img src="{{url('img/online-order-4.png')}}" alt="online-order" height="80px" width="80px">
                                </div>
                                <div class="card1-right">
                                    <div class="card1-num">$789k</div>
                                    <div class="card1-title">Total Revenue</div>
                                    <div class="card1-per1 text-danger"><i class="fas fa-arrow-down"></i> <span>12% (15 days)</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-md-6">
                            <div class="chart1 p-2">
                                <div class="chart1-top">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <h4>Daily Revenue</h4>
                                            <span>Lorem ipsom dolor</span>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <h5 class="float-right"><b>$154k</b></h5>
                                            <p class="float-right"><span class="text-success"><b>+1.5%</b></span> than last week</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                            </div>
                        </div>
                    </div>
  
            
        </div>

@include('Admin/pages.footer')