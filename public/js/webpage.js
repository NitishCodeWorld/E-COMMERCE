/*------------------------------DISPLAYING ALL CATAGORIES OF MEN IN HOMEPAGE start-------------------------------- */

$(document).ready(function(){
    $("#men").mouseenter(function(){
        $("#nav-dropdown-men").slideDown(500);
    });
    $("#user-info-men").mouseleave(function(){
        $("#nav-dropdown-men").slideUp(500);
    })
});


/*------------------------------end-------------------------------- */


/*------------------------------DISPLAYING ALL CATAGORIES OF WOMEN IN HOMEPAGE start-------------------------------- */

$(document).ready(function(){
    $("#women").mouseenter(function(){
        $("#nav-dropdown-women").slideDown(500);
    });
    $("#user-info-women").mouseleave(function(){
        $("#nav-dropdown-women").slideUp(500);
    });
})

/*------------------------------end-------------------------------- */


/*------------------------------DISPLAYING ALL CATAGORIES OF KIDS IN HOMEPAGE start-------------------------------- */

$(document).ready(function(){
    $("#kids").mouseenter(function(){
        $("#nav-dropdown-kids").slideDown(500);
    });
    $("#user-info-kids").mouseleave(function(){
        $("#nav-dropdown-kids").slideUp(500);
    });
})

/*------------------------------end-------------------------------- */

/*------------------------------DISPLAYING DROPDOWN OF PROFILE start-------------------------------- */

$(document).ready(function(){
    $('#profile-tab').mouseenter(function(){
        $('#profile-dropdown').slideDown(500);
    });
    $('.profile').mouseleave(function(){
        $('#profile-dropdown').slideUp(500);
    });
});

/*------------------------------end-------------------------------- */

// -----------------------------display seleted image in productViewPage--------------------

function showProductDetail(){
    if(document.getElementById('prod_full_detail').style.display == 'block'){
        document.getElementById('prod_full_detail').style.display = 'none';
    }else{
        document.getElementById('prod_full_detail').style.display = 'block';
    }
}

// -----------------------------display seleted image in productViewPage end--------------------


// -----------------------Profile Page-----------------------------------------------

$(document).ready(function(){
    $('#edit-btn').click(function(){
        $('#show-details-form').css('display','none');
        $('#edit-details-form').css('display','block');
    });
});


// -----------------------Profile Page end-----------------------------------------------

// -----------------------checkout Page-----------------------------------------------

//  AJAX OPERATION
 
    $(document).ready(function(){

        $('#second_address_form').submit(function(e){
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                url : "checkoutDeliveryAddress",
                method : 'POST',
                data : formData,
                success : function(response){
                    alert(response.message);
                    $('#second_address_form').each(function(){
                        this.reset();
                    });
                    $('#topAddAddr').css('display','none');
                }
            });
        });
    });

    $(document).ready(function(){
        $('#showSecondAddr').click(function(){
            $('#secondAddressArea').css('display','block');

            $.ajax({
                url: "showcheckoutDeliveryAddress",
                method : "GET",
                success : function(response){
                    x = response;
                    // // console.log(x);
                    // $('#sec_name2').html();
                    // $('#sec_second_address').html('Address - '+ ); 
                    // $('#sec_pin2').html('Pin - '+ );
                    // $('#sec_phone2').html('Mobile No. - '+);
                    $('#secondAddressArea').html(
                    '<p>OTHER ADDRESS</p>'+
                        '<div id="address-area">'+
                            '<input type="radio" name="confirm_address">'+
                            '<span id="sec_name2">'+ x[0].name2 +'</span><button>Other</button>'+
                            '<p id="sec_second_address">Address -'+ x[0].second_address +'</p>'+
                            '<p id="sec_pin2">Pin - '+ x[0].pin2 +'</p>'+
                            '<p id="sec_phone2">Mobile No. - '+ x[0].phone2 +'</p>'+
                            '<p class="ml-2"><button class="btn btn-sm">Edit</button><button class="btn btn-sm">'+
                                    'Remove</button></p>'+
                        '</div>'
                        );
                }
            });
        });
    });


    $(document).ready(function(){

        $('#third_address_form').submit(function(e){
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                url : "checkoutDeliveryAddress2",
                method : "POST",
                data : formData,
                success : function(response){
                    alert(response.message);
                    $('#third_address_form').each(function(){
                        this.reset();
                    });
                }
            });
        });
    });


// -----------------------checkout Page end-----------------------------------------------