@include('Admin.pages.header')
@include('Admin.pages.sidebar')
@include('Admin.pages.top_navigationBar')

<div class="container-fluid" style="margin-top: 80px;">
    <div id="add-category-page">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="title mt-4">
                    <h4>Add Category <span class="float-right"><a href="{{url('/Admin/dashboard')}}">Home</a> /
                            Add Category</span></h4>
                </div>
            </div>
        </div>
        <hr>

        <form action="{{ url('add_product') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @if (Session::has('status'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('status') }}
                </div>
            @endif

            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="formDate">Entry Date<span style="color: red;">*</span></label>
                        <input type="date" name="entry_date" id="formDate" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="categoryName">Category Name<span style="color: red;">*</span></label>
                        <input type="text" name="category_name" id="categoryName" class="form-control"
                            placeholder="Enter Category">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="subCategoryName">Sub Category<span style="color: red;">*</span></label>
                        <input type="text" name="subCategory_name" id="subCategoryName" class="form-control" placeholder="Enter Sub Category">
                    </div>
                </div>
            </div>

            <div class="row">  
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="brandName">Brand<span style="color: red;">*</span></label>
                        <input type="text" name="brand" id="brandName" class="form-control" placeholder="Enter Brand">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="product_img">Image <span style="color: red; font-size: 13px;">( Only Image File
                                Accepted )</span></label>
                        <input type="file" name="image" id="product_img" accept=".jpg,.jpeg,.gif,.svg" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="sellingPrice">Selling Price<span style="color: red;">*</span></label>
                        <input type="text" name="sellingPrice" id="sellingPrice" class="form-control" placeholder="Enter Selling Price">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="mrp">MRP<span style="color: red;">*</span></label>
                        <input type="text" name="mrp" id="mrp" class="form-control" placeholder="Enter MRP Price">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="discountPer">Discount Percentage(%)</label>
                        <input type="text" name="discountPer" id="discountPer" class="form-control" placeholder="click to auto calculate %" onmousedown="discountCal()">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" id="description" class="form-control"
                            placeholder="Description...">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="form-group float-right">
                        <button class="btn btn-danger" id="reset">Reset</button>
                        <input type="submit" value="Add Category">
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>


@include('Admin.pages.footer')