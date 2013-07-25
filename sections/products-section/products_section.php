<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <!--BEGIN: Products -->
        <section id="Products">
            <article class="page">
                <div class="row">

                    <div class="span12">
                        <h2 class="page-title">PRODUCTS 
                            <a class="to-top scroll-page" href="#home" title="To Top">
                                <i class="icon-chevron-up"></i>
                            </a>
                        </h2>
                    </div>

                    <div class="span12">
                        <p><strong>สั่งซื้อสินค้าของเรา:</strong></p>
                        <ul class="nav nav-pills" id="work-tabs">
                            <li class="active"><a href="#cd-trainings" id="M-01" data-toggle="pill">CD-Training</a></li>
                            <li><a href="#books" id="M-02" data-toggle="pill">Books</a></li>
                            <!-- <li><a href="#training-courses" id="M-03" data-toggle="pill">Training-Courses</a></li> -->
                           
                            <a class="btn btn-large tip-bottom pull-right scroll-page" title="ตระกร้าสินค้า" href="#shopping_cart" onclick="showShoppingCart()"><i class="icon-shopping-cart"></i><span class="label label-important" id="showProducts_Count">0</span></a>
                        </ul>
                        <div class="tab-content"> 

                            <!--BEGIN: CD-Training Featured-->
                            <div class="tab-pane fade in active" id="cd-trainings">
                                <!-- <ul class="thumbnails">
                                    <li class="span4">
                                        <div class="well layers"> 
                                            <a href="#" class="thumbnail"><img src="./sections/work-section/images/360x270.gif" alt=""> </a> 
                                            <div class="caption">
                                                <h3>Thumbnail label</h3>
                                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                <p><a href="#" class="btn btn-primary">ดูรายละเอียด</a> <a class="btn" onclick="showStandard()"><i class="icon-shopping-cart"></i>สังซื้อ</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="span4">
                                        <div class="well layers"> 
                                            <a href="#" class="thumbnail"><img src="./sections/work-section/images/360x270.gif" alt=""> </a> 
                                            <div class="caption">
                                                <h3>Thumbnail label</h3>
                                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                <p><a href="#" class="btn btn-primary">ดูรายละเอียด</a> <a onclick="showSticky()" class="btn"><i class="icon-shopping-cart"></i>สังซื้อ</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="span4">
                                        <div class="well layers"> 
                                            <a href="#" class="thumbnail"><img src="./sections/work-section/images/360x270.gif" alt=""> </a> 
                                            <div class="caption">
                                                <h3>Thumbnail label</h3>
                                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                <p><a href="#" class="btn btn-primary">ดูรายละเอียด</a> <a onclick="showNotice_with_image()" class="btn"><i class="icon-shopping-cart"></i>สังซื้อ</a></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul> -->
                            </div>
                            <!--END: CD-Training Featured--> 

                            <!--BEGIN: Books Featured-->
                            <div class="tab-pane fade in" id="books">
                                <ul class="thumbnails">
                                </ul>
                            </div>
                            <!--END: Books Featured--> 

                            <!--BEGIN: Trainings-Course Featured-->
                            <!-- <div class="tab-pane fade in" id="training-courses">
                                <ul class="thumbnails">
                                </ul>
                            </div> -->
                            <!--END: Trainings-Course Featured--> 

                        </div>
                    </div>
                </div>
            </article>
        </section>
        <!--END: Products --> 
    </body>
    <script type="text/javascript" src="js/jQuery/jquery.js"></script> 
    <script type="text/javascript">

    function showShoppingCartList(){
        
        //Start : Show List in Shopping Cart
        $.ajax({
            url: '../utility/REST/showProduct_to_Cart.php',
            dataType:  'json',
            success: function(jsonData){
                
                //console.log(jsonData);
                //Show จำนวนรายการที่สั่งซื้อ
                $('#showProducts_Count').show();
                $('#showProducts_Count').html(jsonData.rows[0].product_count);

                //Show รายการสั่งซื้อ
                $('#order_lists_cart tbody').empty();
                
                var order_tag = "";
                
                $.each(jsonData.rows, function(idx, data) {
                    
                    $.each(data.orderList, function(idx_inner, data_inner) {
                        order_tag += "<tr>";
                        
                        //Column # 1
                        order_tag += "<td style='text-align: center;vertical-align:middle;'>"+data_inner.order_no+"</td>";
                        
                        //Column # 2
                        order_tag += "<td >";
                        order_tag += "<div class='media'>";
                        order_tag += "<a class='pull-left hidden-phone' href='#"+data_inner.order_product_code+"' data-toggle='modal'>";
                        //order_tag += "<img class='media-object' data-src='holder.js/64x64' alt='36x27' style='width: 72px; height: 54px; ' src='./sections/products-section/images/"+data_inner.order_picture+"'>";
                        order_tag += "<img class='media-object' data-src='holder.js/64x64' alt='36x27' style='width: 90px; height: 68px; ' src='./sections/products-section/images/"+data_inner.order_picture+"'>";
                        order_tag += "</a>";
                        order_tag += "<div class='media-body'>";
                        order_tag += "<h4 class='media-heading hidden-phone'>"+data_inner.order_category+"</h4>";
                        order_tag += data_inner.order_name;
                        if (data_inner.order_status == "1.Starting Process") {
                            order_tag += "<p class='text-error'></p>";
                        }else if (data_inner.order_status == "2.Confirm Process") {
                            order_tag += "<p class='text-error'><a href='#payment_inform' class='text-error scroll-page'  id='show_payment_inform_link'>ยืนยันการสั่งซื้อเรียบร้อยแล้ว กรุณาโอนเงินและแจ้งชำระค่าสินค้า</a></p>";
                        }else if (data_inner.order_status == "3.Confirm Payment") {
                            order_tag += "<p class='text-success'>ได้รับเงินเรียบร้อยแล้ว อยู่ระหว่างการจัดส่งสินค้า</p>";
                        }

                        order_tag += "</div>";
                        order_tag += "</div>";
                        //<!-- Modal -->
                        order_tag += "<div id='"+data_inner.order_product_code+"' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                        order_tag += "<div class='modal-header'>";
                        order_tag += "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>";
                        order_tag += "<h3 id='myModalLabel'>"+data_inner.order_category+" : "+data_inner.order_name+"</h3>";
                        order_tag += "<div class='modal-header'>";
                        
                        order_tag += "</div>";
                        order_tag += "<div class='modal-body'>";
                        order_tag += "<img src='./sections/products-section/images/"+data_inner.order_picture+"' alt='' class='img-polaroid'>";
                        order_tag += "<h4>ราคา "+data_inner.order_unit_price+" บาท/หน่วย</h4>";
                        order_tag += data_inner.order_product_detail_intro;
                        order_tag += "<hr>";
                        order_tag += data_inner.order_product_detail_all;
                        order_tag += "</div>";
                        order_tag += "<div class='modal-footer'>";
                        order_tag += "<button class='btn' data-dismiss='modal' aria-hidden='true'>Close</button>";
                        order_tag += "</div>";
                        
                        order_tag += "</td>";
                        
                        //Column # 3
                        if (data_inner.order_status == "1.Starting Process") {
                            order_tag += "<td style='text-align: center;vertical-align:middle;'><input class='input_product_amount' for='"+data_inner.order_product_code+"' type='Text' value='"+data_inner.order_amount+"' style='text-align: center; width:60%;'></td>";
                        }else if (data_inner.order_status == "2.Confirm Process") {
                            order_tag += "<td style='text-align: center;vertical-align:middle;'><input class='input_product_amount' for='"+data_inner.order_product_code+"' type='Text' value='"+data_inner.order_amount+"' style='text-align: center; width:60%;'></td>";
                        }else if (data_inner.order_status == "3.Confirm Payment") {
                            order_tag += "<td style='text-align: center;vertical-align:middle;'><input class='input_product_amount' for='"+data_inner.order_product_code+"' type='Text' value='"+data_inner.order_amount+"' style='text-align: center; width:60%;' disabled></td>";
                        }
                        
                        
                        //Column # 4
                        order_tag += "<td style='text-align: center;vertical-align:middle;' class='hidden-phone'>"+data_inner.order_unit_price+"</td>";
                        
                        //Column # 5
                        order_tag += "<td style='text-align: center;vertical-align:middle;' for='show_total_price_each_product'>"+data_inner.order_total+"</td>";
                        
                        //Column # 6
                        if (data_inner.order_status == "1.Starting Process") {
                            order_tag += "<td style='text-align: center;vertical-align:middle;'>";
                            order_tag += "<button class='btn btn-mini btn-danger delete_select_product' type='button' for='"+data_inner.order_product_code+"'><i class='icon-trash'></i></button>";
                            order_tag += "</td>";
                        }else if (data_inner.order_status == "2.Confirm Process") {
                            order_tag += "<td style='text-align: center;vertical-align:middle;'>";
                            order_tag += "<button class='btn btn-mini btn-danger delete_select_product' type='button' for='"+data_inner.order_product_code+"'><i class='icon-trash'></i></button>";
                            order_tag += "</td>";
                        }else if (data_inner.order_status == "3.Confirm Payment") {
                            order_tag += "<td style='text-align: center;vertical-align:middle;'>-</td>";
                        }
                        
                        
                        order_tag += "</tr>";
                    });
                    
                    order_tag += "<tr>";
                    order_tag += "<td colspan='2' style='text-align: center'><h4>ยอดค้างชำระ</h4></td>";
                    order_tag += "<td colspan='4' style='text-align: center' id='show_total_price'><h4>"+data.total_price+" บาท</h4></td>";
                    order_tag += "</tr>";
                    
                });
                
                $('#order_lists_cart tbody').append(order_tag);
                
            }
        });
        //End : Show List in Shopping Cart

    }

    function showShoppingCart(){

        $('#shopping_cart').slideDown(2000, function() {
            $('[data-spy="scroll"]').each(function() {
                var $spy = $(this).scrollspy('refresh')
            });                  
        });

        showShoppingCartList();
        showData_for_Delivery_Product();
    }

    function showData_for_Delivery_Product(){

        $.ajax({
            url: '../utility/REST/getData_for_Delivery_Product.php',
            dataType:  'json',
            success: function(jsonData){
                //console.log(jsonData);
                if (jsonData.login_status == 'login already') {
                    $('#memberName_for_delivery_products').val(jsonData.name);
                    $('#memberEmail_for_delivery_products').val(jsonData.email);
                    $('#memberTelephone_for_delivery_products').val(jsonData.telephone);
                    $('#memberAddress_for_delivery_products').val(jsonData.address);

                    $('#memberEmail_for_delivery_products').attr('disabled', true);
                    $('#btnSave_for_delivery_products').attr('disabled', true);
                    $('#btnCancel_for_delivery_products').attr('disabled', true);
                }else{
                    $('#memberName_for_delivery_products').val('');
                    $('#memberEmail_for_delivery_products').val('');
                    $('#memberTelephone_for_delivery_products').val('');
                    $('#memberAddress_for_delivery_products').val('');

                    $('#memberName_for_delivery_products').focus();
                    $('#memberEmail_for_delivery_products').attr('disabled', false);
                    $('#btnSave_for_delivery_products').attr('disabled', false);
                    $('#btnCancel_for_delivery_products').attr('disabled', false);
                }
                
            }
        });

    }

    function productAddCart(productName, productCode){

        //แสดงส่วนของตระกร้าสินค้า
        $('#shopping_cart').slideDown(2000, function() {
            $('[data-spy="scroll"]').each(function() {
                var $spy = $(this).scrollspy('refresh')
            });                  
            //window.location = 'index.php';
        });



        $.ajax({
            url: '../utility/REST/addProduct_to_Cart.php',
            data:{paramProductCode: productCode},
            //dataType:  'json',
            success: function(returnData){

                if(returnData.trim() == 'success'){
                    
                    showShoppingCartList();
                    showData_for_Delivery_Product();

                    $.gritter.add({
                        title:  'มีสินค้าในตระกร้า',
                        text:   'เพิ่ม '+productName+' เข้าตระกร้าเรียบร้อยแล้ว<br/>คุณต้องการดูตระกร้าสินค้าทั้งหมด? <a class="scroll-page" href="#shopping_cart">Click!</a>',
                        image:  'img/shopping_cart_32x32.png',
                        sticky: false
                    });
                }else if(returnData.trim() == 'fail'){
                    $.gritter.add({
                        title:  'สินค้าอยู่ระหว่างการจัดส่ง',
                        text:   'สินค้าอยู่ระหว่างการจัดส่ง, ไม่สามารถเพิ่มจำนวนสินค้าได้',
                        image:  'img/shopping_cart_32x32.png',
                        sticky: false
                    });
                }
                
            }

        });

        


    }

    function updateProductList(containerProductList, paramProductCategoryID){



        $.ajax({
            url: '../utility/REST/getProducts_List.php',
            data:{product_category_id: paramProductCategoryID},
            dataType:  'json',
            success: function(jsonData){

                $('#'+containerProductList).empty();

                var myTag = "<ul class='thumbnails'>";

                 $.each(jsonData.rows, function(idx, data) {

                    myTag += "<li class='span4'>";
                    myTag += "<div class='well layers'>";
                    myTag += "<a href='#' class='thumbnail'><img src='./sections/products-section/images/"+data.product_picture+"' alt=''> </a>";
                    myTag += "<div class='caption'>";
                    myTag += "<h3>"+data.product_name+"</h3>";
                    myTag += "<h4>ราคา "+data.product_unit_price+" บาท</h4>";
                    myTag += "<p>"+data.product_detail_intro+"</p>";
                    myTag += "<p><a href='#"+data.product_code+"' data-toggle='modal' class='btn btn-primary hidden-phone'>ดูรายละเอียด</a> <a class='btn' onclick='productAddCart(\""+data.product_name+"\", \""+data.product_code+"\")'><i class='icon-shopping-cart'></i>สั่งซื้อ</a></p>";
                    
                    //Modal
                    myTag += "<div id='"+data.product_code+"' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                    myTag += "<div class='modal-header'>";
                    myTag += "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>";
                    myTag += "<h3 id='myModalLabel'>"+data.product_name+"</h3>";
                    myTag += "</div>";
                    myTag += "<div class='modal-body'>";

                    myTag += "<img src='./sections/products-section/images/"+data.product_picture+"' alt='' class='img-polaroid'>";


                    myTag += "<h4>ราคา "+data.product_unit_price+" บาท</h4>";
                    //myTag += "<p><a href='#' class='tooltip-test' title='' data-original-title='Tooltip'>This link</a> and <a href='#' class='tooltip-test' title='' data-original-title='Tooltip'>that link</a> should have tooltips on hover.</p>";
                    myTag += "<hr>";

                    myTag += data.product_detail_all;


                    myTag += "</div>";
                    myTag += "<div class='modal-footer'>";
                    myTag += "<button class='btn' data-dismiss='modal' aria-hidden='true'>Close</button>";
                    //myTag += "<button class='btn btn-primary'>Save changes</button>";
                    myTag += "</div>";
                    myTag += "</div>";

                    myTag += "</div>";
                    myTag += "</div>";
                    myTag += "</li>";
                 });
                
                myTag += "</ul>";

                $('#'+containerProductList).append(myTag);

            },
            fail: function(error){
                alert(error);
            }
        });

    }


        // function showProductDetail(){

        //     alert('555');

        //     return false;
        // }

        $(function(){
            updateProductList('cd-trainings', '1');
            updateProductList('books', '2');
            //updateProductList('training-courses', '3');


        $(".input_product_amount").live("change", function(e){ 

            // console.log(e);
            // console.log(this);
            // console.log($(this).val());
            // console.log($(this).attr('for'));
            // console.log($(this).parent().siblings('td'));
            // console.log($(this).parent().siblings('td[for="show_total_price_each_product"]').html());

            var myTotal_price_each_product = $(this).parent().siblings('td[for="show_total_price_each_product"]');

            $.ajax({
                url: '../utility/REST/showProduct_to_Cart_on_ChangeAmount.php',
                data:{product_id: $(this).attr('for'), product_amount: $(this).val()},
                dataType:  'json',
                success: function(jsonData){

                    //alert(jsonData);
                    $.each(jsonData.rows, function(idx, data) {

                        $.each(data.orderList, function(idx_inner, data_inner) {
                            myTotal_price_each_product.html(data_inner.order_total);
                        });

                        $('#show_total_price').html("<h4>"+data.total_price+" บาท</h4>");

                    });


                }
            });

        }); 

        $(".delete_select_product").live("click", function(e){ 
            //console.log($(this).attr('for'));
            var selectedTableRow = $(this).parent().parent();

            $.ajax({
                url: '../utility/REST/deleteProduct_from_Cart.php',
                data:{product_id: $(this).attr('for')},
                dataType:  'json',
                success: function(jsonData){
                    //console.log(jsonData);

                    $('#show_total_price').html("<h4>"+jsonData.rows[0].total_price+" บาท</h4>");

                    //alert(jsonData);
                    //$.each(jsonData.rows, function(idx, data) {
                        //console.log(selectedTableRow.remove());
                        selectedTableRow.remove();
                        var myTableRow = $('#order_lists_cart tbody tr');
                        
                        $('#showProducts_Count').html(myTableRow.length-1);

                        //console.log($('#order_lists_cart tbody tr'));

                        for (var i = 0; i < myTableRow.length-1; i++) {
                            //console.log($('#order_lists_cart tbody tr')[i]);
                            var myTableRow_temp = $('#order_lists_cart tbody tr')[i];
                            //$this = $('#order_lists_cart tbody tr[i]');
                            //console.log($(myTableRow_temp).find('td:first').html());
                            $(myTableRow_temp).find('td:first').html(i+1);
                        };
                        
                        // $('#order_lists_cart tbody tr').each(function() {
                        //     $this = $(this)

                        //     //var value = $this.find("span.value").html();
                        //     //var quantity = $this.find("input.quantity").val();
                        // });

                    //});


                }
            });
        });


        $('#show_payment_inform_link').live("click", function(e){     
            //แสดงส่วนของตระกร้าสินค้า
            $('#payment_inform').slideDown(2000, function() {
               $('[data-spy="scroll"]').each(function() {
                   var $spy = $(this).scrollspy('refresh')
               });                  
                //window.location = '#payment_inform';
            });

        });
            

        });
    </script>
</html>
