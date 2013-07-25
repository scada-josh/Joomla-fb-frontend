<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <!--BEGIN: Features -->
        <section id="shopping_cart">
            <article class="page">
                <div class="row">
                    <div class="span12">
                        <h2 class="page-title">ตระกร้าสินค้า<a class="to-top scroll-page" href="#home" title="To Top"><i class="icon-chevron-up"></i></a></h2>
                    </div>
                </div>

                <div class="row">
                    <div class="span6" >
                        <form class="form-horizontal" method="POST" id="form_data_for_delivery_products" >
                            <fieldset>
                                <legend>ข้อมูลสำหรับจัดส่งสินค้า</legend>
                                <div class="control-group">
                                    <label class="control-label">ชื่อ-นามสกุล<span style="color: red">*</span> : </label>
                                    <div class="controls">
                                        <input type="text" name="memberName" id="memberName_for_delivery_products" >
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Email Address<span style="color: red">*</span> : </label>
                                    <div class="controls">
                                        <input type="text" name="memberEmail" id="memberEmail_for_delivery_products" placeholder="อีเมล์ (Email Address)" autocomplete="off" disabled>
                                        <!-- <input type="text" name="memberEmail" placeholder="อีเมล์ (Email Address)" autocomplete="off" disabled> -->
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">เบอร์โทรศัพท์<span style="color: red">*</span> : </label>
                                    <div class="controls">
                                        <input name="memberTel" id="memberTelephone_for_delivery_products" type="text" autocomplete="off" placeholder="08xxxxxxxx">
                                        <!-- <input name="memberTel"  type="text" placeholder="08xxxxxxxx"> -->
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">ที่อยู่<span style="color: red">*</span> : </label>
                                    <div class="controls">
                                        <textarea name="memberAddress" id="memberAddress_for_delivery_products" placeholder="ที่อยู่สำหรับจัดส่งสินค้า" ></textarea>
                                        <!-- <textarea name="memberAddress" placeholder="ที่อยู่สำหรับจัดส่งสินค้า"></textarea> -->
                                        <!--                                    <span class="help-block">กรุณากรอกที่อยู่ให้ถูกต้อง</span>-->
                                    </div>
                                </div>
                            <div class="form-actions">
                                <button type="button" id="btnSave_for_delivery_products"    class="btn btn-primary" disabled>บันทึก</button>
                                <button type="button"  id="btnCancel_for_delivery_products"  class="btn btn-primary" disabled>ยกเลิก</button>
                            </div>
                        </fieldset>
                    </form>
                    </div>

                    <div class="span4 offset2">
                        <h2>{CODE-AHOLIC}</h2>
                        <p>ทางทีมงานขอขอบคุณทุกท่าน code-aholic ที่ให้การสนับสนุนสินค้าและบริการของเรา พวกเราสัญญาว่าเราจะนำความรู้ที่จำเป็นสำหรับนักพัฒนา Software ในด้านต่างๆ มาเผยแพร่เพื่อให้เป็นประโยชน์แก่สังคมต่อไป</p>
                        <p><a style="width: 86%" class="btn" href="#payment_inform" class="scroll-page"  id="show_payment_inform" >แจ้งชำระค่าสินค้า &raquo;</a></p>
                    </div>
                </div>
                
                <!-- <hr/> -->

                <div class="row">
                    <div class="span12">
                        <h3>รายการสั่งซื้อ</h3>

                        <div class="navbar">
                            <div class="navbar-inner">
                                <div class="container">
                                    <a class="btn btn-navbar collapsed" data-toggle="collapse" data-target="#shoppingCart-nav-collapse">
                                        <span class="icon-bar"></span> 
                                        <span class="icon-bar"></span> 
                                        <span class="icon-bar"></span> 
                                    </a>
                                    <a href="#" class="brand"><img src="img/shopcart.png" alt="Shopping Cart"></a>
                                    <div class="nav-collapse collapse" id="shoppingCart-nav-collapse">
                                        <!-- <ul class="nav" >
                                            <li class="divider-vertical"></li>
                                            <li class="active" data-toggle="pill" >
                                                
                                                <a href="#">ยืนยันการสั่งซื้อ (Checkout)</a>
                                            </li>

                                            <li class="divider-vertical"></li>


                                            
                                        </ul> -->
                                        <ul class="nav pull-right">
                                            <li class="active" >
                                                <a href="#" class="confirmOrder_Products">ยืนยันการสั่งซื้อ (Checkout)</a>
                                            </li>
                                            <li class="divider-vertical"></li>
                                            <!-- <li class="divider-vertical"></li> -->

                                            <li class="pull-right hidden-phone hidden-tablet">
                                                <a href="#" ><img style="height: 50px;margin-top: -16px"  src="img/code-aholic_logo.png" ></a>
                                            </li>
                                        </ul>
                                        <!-- <ul class="nav pull-right hidden-phone">
                                            <li class="divider-vertical"></li>
                                            <li class="pull-right">
                                                <a href="#" ><img style="height: 50px;margin-top: -16px"  src="img/code-aholic_logo.png" alt="Mobile Application"></a>
                                            </li>
                                        </ul> -->
                                    </div>
                                    <!-- /.nav-collapse --> 

                                </div>
                                <!-- /.container --> 
                            </div>
                            <!-- /.navbar-inner --> 

                        </div>
                        <!-- /.navbar --> 
                    </div>
                </div>



                <div class="row">
                    <div class="span12">
                        <table class="table table-striped table-bordered" id="order_lists_cart" >
                            <thead> 
                                <tr>
                                    <th  style="width: 8px; text-align: center">No.</th>
                                    <th style="text-align: center"><h4>รายการ</h4></th>
                                    <th style="width: 15px">จำนวน</th>
                                    <th style="width: 40px" class="hidden-phone">unit Price</th>
                                    <th style="width: 40px; text-align: center">Total</th>
                                    <th style="width: 30px; text-align: center">ลบ</th>
                                    <!-- <th style="width: 100px">Delivery Info.</th> -->
                                </tr>
                            </thead>
                            <tbody> 
                                <!-- <tr class="success"> -->
                                 <tr>
                                    <td></td>
                                    <td>
                                        <!-- <div class="media">
                                            <a class="pull-left hidden-phone" href="#myModal-Product" data-toggle="modal">
                                                <img class="media-object" data-src="holder.js/64x64" alt="36x27" style="width: 72px; height: 54px; " src="./sections/products-section/images/test-CD.png">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading hidden-phone">CD Training</h4>
                                                Highchart API - Basic
                                            </div>
                                        </div> -->

                                        <!-- <div id="myModal-Product" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h3 id="myModalLabel">CD Training : Highchart API - Basic</h3>
                                        </div>
                                        <div class="modal-body">
                                            <img src='./sections/products-section/images/test-CD.png' alt='' class='img-polaroid'>
                                            <h4>ราคา 250 บาท</h4>
                                            <hr>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                        </div>
                                    </div> -->

                                    </td>
                                    <td > </td>
                                    <td > </td>
                                    <td > </td>
                                    <td > </td>
                                </tr> 
                                <tr>
                                    <td colspan="2" style="text-align: center"><h4>ราคารวม</h4></td>
<!--                                    <td></td>-->
<!--                                    <td></td>
                                    <td>Info</td>-->
                                    <td colspan="4" style="text-align: center"><h4>0 บาท</h4></td>
                                    <!-- <td></td> -->
                                </tr>
                            </tbody>
                        </table>
                        
                        <ul class="pager visible-phone visible-tablet">
                            <li class="next">
                                <a href="#" class="confirmOrder_Products">ยืนยันการสั่งซื้อ (Checkout) &rarr;</a>
                            </li>
                        </ul>

                        <ul class="pager">
                            <li class="next">
                                <!-- <a href="#Products" class="scroll-page" onclick="showProducts_List()"> <i class="icon-plus-sign"></i>&nbsp;เลือกสินค้าเพิ่ม (Continue shopping) &rarr;</a> -->
                                <!-- <a href="#Products" class="scroll-page" onclick="showProducts_List()"> <i class="icon-plus-sign"></i>&nbsp;เลือกสินค้าเพิ่ม (Continue shopping)</a> -->
                                <a href="#Products" class="scroll-page" id="btn_continue_shopping" >เลือกสินค้าเพิ่ม (Continue shopping) &rarr;</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="span3">
                        <h2>{CODE-AHOLIC}</h2>
                        <p>ทางทีมงานขอขอบคุณทุกท่าน code-aholic ที่ให้การสนับสนุนสินค้าและบริการของเรา พวกเราสัญญาว่าเราจะนำความรู้ที่จำเป็นสำหรับนักพัฒนา Software ในด้านต่างๆ มาเผยแพร่เพื่อให้เป็นประโยชน์แก่สังคมต่อไป</p>
                        <p><a style="width: 90%" class="btn scroll-page" href="#payment_inform" >แจ้งชำระค่าสินค้า &raquo;</a></p>
                    
                    </div>
                </div> -->

<!--                <hr>-->

            </article>
        </section>
        <!--END: Features --> 
    </body>
    <script type="text/javascript" src="js/jQuery/jquery.js"></script> 
    <script type="text/javascript">
    $(function(){

  
        $('.confirmOrder_Products').live("click", function(e){

            if($("#form_data_for_delivery_products").validate().form()){
                //alert('valid form');
                
                $.ajax({
                    url: '../utility/REST/confirmPurchase.php',
                    dataType:  'json',
                    data : $('#form_data_for_delivery_products').serialize(),
                    success: function(jsonData) {
                        console.log(jsonData);

                        if ((jsonData.login_status == 'not login') && (jsonData.email_is_existing == 'YES')) {
                             alert('Email ของคุณเคยสมัครสมาชิกไว้แล้ว กรุณา Login เข้าสู่ระบบ');
                        }else if ((jsonData.login_status == 'not login') && (jsonData.email_is_existing == 'NO')&&(jsonData.saveData_for_Delivery == 'YES')) {
                             alert('เพิ่มข้อมูล Non-member เรียบร้อยแล้ว');
                        }else if ((jsonData.login_status == 'login already')) {
                             alert('ยืนยันการสั่งซื้อเรียบร้อยแล้ว');
                             showShoppingCart();
                        }



                    }
                });

                var validator = $("#form_data_for_delivery_products").validate();
                validator.resetForm();

            }else{
                //alert('non-valid form');
                alert('กรุณากรอกข้อมูลที่จำเป็นสำหรับสั่งซื้อสินค้า');
                $('#memberName_for_delivery_products').focus();
            }



            return false;
        });
        

        function showProducts_List(){
            //แสดงส่วนของรายการสินค้า
             $('#Products').slideDown(2000, function() {
                 $('[data-spy="scroll"]').each(function() {
                     var $spy = $(this).scrollspy('refresh')
                 });                  
                //window.location = '#payment_inform';
             });
        }

        $('#btn_continue_shopping').live("click", function(e){
            showProducts_List();
        });

        $('#show_payment_inform').click(function(){
        //$('.show_payment_inform').live("click", function(e){     
            //แสดงส่วนของตระกร้าสินค้า
             $('#payment_inform').slideDown(2000, function() {
                 $('[data-spy="scroll"]').each(function() {
                     var $spy = $(this).scrollspy('refresh')
                 });                  
                //window.location = '#payment_inform';
             });

             //return false;
            //$('#payment_inform').show();

        });

        $('#form_data_for_delivery_products').live("keyup", function(e){ 
            //if($("#form_data_for_delivery_products").validate().form()){
                $('#btnSave_for_delivery_products').attr('disabled', false);
                $('#btnCancel_for_delivery_products').attr('disabled', false);
            //}
        });

        $('#btnSave_for_delivery_products').live("click", function(e){ 

            if($("#form_data_for_delivery_products").validate().form()){
                //alert('valid form');
                $.ajax({
                    url: '../utility/REST/updateData_for_Delivery.php',
                    dataType:  'json',
                    data : $('#form_data_for_delivery_products').serialize(),
                    success: function(jsonData) {
                        //console.log(jsonData);

                        if ((jsonData.login_status == 'not login') && (jsonData.email_is_existing == 'YES')) {
                             alert('Email ของคุณเคยสมัครสมาชิกไว้แล้ว กรุณา Login เข้าสู่ระบบ');
                        }else if ((jsonData.login_status == 'not login') && (jsonData.email_is_existing == 'NO')) {
                             alert('เพิ่มข้อมูล Non-member เรียบร้อยแล้ว');
                        }else if ((jsonData.login_status == 'login already')) {
                             alert('อัพเดทข้อมูล member เรียบร้อยแล้ว');
                         }

                         $('#btnSave_for_delivery_products').attr('disabled', true);
                         $('#btnCancel_for_delivery_products').attr('disabled', true);

                         var validator = $("#form_data_for_delivery_products").validate();
                         validator.resetForm();
                    }
                });
            }else{
                //alert('non-valid form');
            }

            
        });

        $('#btnCancel_for_delivery_products').live("click", function(e){ 
            //alert('Cancel');
            var validator = $("#form_data_for_delivery_products").validate();
                validator.resetForm();

            showData_for_Delivery_Product();

            $('#btnSave_for_delivery_products').attr('disabled', true);
            $('#btnCancel_for_delivery_products').attr('disabled', true);
        });

        


    });
    </script>
</html>
