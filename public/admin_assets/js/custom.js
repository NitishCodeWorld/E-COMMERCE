function showMenu(){
    if(document.getElementById('submenu').style.display == 'block'){
        document.getElementById('submenu').style.display = 'none';
        document.getElementById('drop').className = 'fas fa-angle-right';
    }else{
        document.getElementById('submenu').style.display = 'block';
        document.getElementById('drop').className = 'fas fa-angle-down';
        document.getElementById('submenu1').style.display = 'none';
        document.getElementById('drop1').className = 'fas fa-angle-right';
        document.getElementById('submenu2').style.display = 'none';
        document.getElementById('drop2').className = 'fas fa-angle-right';
        document.getElementById('submenu3').style.display = 'none';
        document.getElementById('drop3').className = 'fas fa-angle-right';
        document.getElementById('submenu4').style.display = 'none';
        document.getElementById('drop4').className = 'fas fa-angle-right';
        document.getElementById('submenu5').style.display = 'none';
        document.getElementById('drop5').className = 'fas fa-angle-right';
    }
}

function showMenu1(){
    if(document.getElementById('submenu1').style.display == 'block'){
        document.getElementById('submenu1').style.display = 'none';
        document.getElementById('drop1').className = 'fas fa-angle-right';
    }else{
        document.getElementById('submenu1').style.display = 'block';
        document.getElementById('drop1').className = 'fas fa-angle-down';
        document.getElementById('submenu').style.display = 'none';
        document.getElementById('drop').className = 'fas fa-angle-right';
        document.getElementById('submenu2').style.display = 'none';
        document.getElementById('drop2').className = 'fas fa-angle-right';
        document.getElementById('submenu3').style.display = 'none';
        document.getElementById('drop3').className = 'fas fa-angle-right';
        document.getElementById('submenu4').style.display = 'none';
        document.getElementById('drop4').className = 'fas fa-angle-right';
        document.getElementById('submenu5').style.display = 'none';
        document.getElementById('drop5').className = 'fas fa-angle-right';
    }
}

function showMenu2(){
    if(document.getElementById('submenu2').style.display == 'block'){
        document.getElementById('submenu2').style.display = 'none';
        document.getElementById('drop2').className = 'fas fa-angle-right';
    }else{
        document.getElementById('submenu2').style.display = 'block';
        document.getElementById('drop2').className = 'fas fa-angle-down';
        document.getElementById('submenu').style.display = 'none';
        document.getElementById('drop').className = 'fas fa-angle-right';
        document.getElementById('submenu1').style.display = 'none';
        document.getElementById('drop1').className = 'fas fa-angle-right';
        document.getElementById('submenu3').style.display = 'none';
        document.getElementById('drop3').className = 'fas fa-angle-right';
        document.getElementById('submenu4').style.display = 'none';
        document.getElementById('drop4').className = 'fas fa-angle-right';
        document.getElementById('submenu5').style.display = 'none';
        document.getElementById('drop5').className = 'fas fa-angle-right';
    }
}

function showMenu3(){
    if(document.getElementById('submenu3').style.display == 'block'){
        document.getElementById('submenu3').style.display = 'none';
        document.getElementById('drop3').className = 'fas fa-angle-right';
    }else{
        document.getElementById('submenu3').style.display = 'block';
        document.getElementById('drop3').className = 'fas fa-angle-down';
        document.getElementById('submenu').style.display = 'none';
        document.getElementById('drop').className = 'fas fa-angle-right';
        document.getElementById('submenu1').style.display = 'none';
        document.getElementById('drop1').className = 'fas fa-angle-right';
        document.getElementById('submenu2').style.display = 'none';
        document.getElementById('drop2').className = 'fas fa-angle-right';
        document.getElementById('submenu4').style.display = 'none';
        document.getElementById('drop4').className = 'fas fa-angle-right';
        document.getElementById('submenu5').style.display = 'none';
        document.getElementById('drop5').className = 'fas fa-angle-right';
    }
}

function showMenu4(){
    if(document.getElementById('submenu4').style.display == 'block'){
        document.getElementById('submenu4').style.display = 'none';
        document.getElementById('drop4').className = 'fas fa-angle-right';
    }else{
        document.getElementById('submenu4').style.display = 'block';
        document.getElementById('drop4').className = 'fas fa-angle-down';
        document.getElementById('submenu').style.display = 'none';
        document.getElementById('drop').className = 'fas fa-angle-right';
        document.getElementById('submenu1').style.display = 'none';
        document.getElementById('drop1').className = 'fas fa-angle-right';
        document.getElementById('submenu2').style.display = 'none';
        document.getElementById('drop2').className = 'fas fa-angle-right';
        document.getElementById('submenu3').style.display = 'none';
        document.getElementById('drop3').className = 'fas fa-angle-right';
        document.getElementById('submenu5').style.display = 'none';
        document.getElementById('drop5').className = 'fas fa-angle-right';
    }
}

function showMenu5(){
    if(document.getElementById('submenu5').style.display == 'block'){
        document.getElementById('submenu5').style.display = 'none';
        document.getElementById('drop5').className = 'fas fa-angle-right';
    }else{
        document.getElementById('submenu5').style.display = 'block';
        document.getElementById('drop5').className = 'fas fa-angle-down';
        document.getElementById('submenu').style.display = 'none';
        document.getElementById('drop').className = 'fas fa-angle-right';
        document.getElementById('submenu1').style.display = 'none';
        document.getElementById('drop1').className = 'fas fa-angle-right';
        document.getElementById('submenu2').style.display = 'none';
        document.getElementById('drop2').className = 'fas fa-angle-right';
        document.getElementById('submenu3').style.display = 'none';
        document.getElementById('drop3').className = 'fas fa-angle-right';
        document.getElementById('submenu4').style.display = 'none';
        document.getElementById('drop4').className = 'fas fa-angle-right';
    }
}

/*admin logout start */
const element = document.getElementById('admin_log');
element.addEventListener('mouseover', showOption);
element.addEventListener('mouseout', hideOption);

function showOption(){
    document.getElementById('logout-link').style.display = 'block';
}
function hideOption(){
    document.getElementById('logout-link').style.display = 'none';
}
/*admin logout end */



const reset = document.getElementById('reset');
reset.addEventListener('click', clearField);

function clearField(){
    document.getElementById('formDate').value = '';
    document.getElementById('categoryName').value = '';
    document.getElementById('subCategoryName').value = '';
    document.getElementById('brandName').value = '';
    document.getElementById('product_img').value = '';
    document.getElementById('description').value = '';
}


// ----------------------Calculation of Discount Percentage---------------

function discountCal(){
    var sellingPrice = document.getElementById('sellingPrice').value;
    var mrp = document.getElementById('mrp').value;

    var result = sellingPrice/mrp * 100;
    document.getElementById('discountPer').value = parseInt(result);
}


// ----------------------Calculation of Discount Percentage end---------------