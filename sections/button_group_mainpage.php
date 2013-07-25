<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript">
            //            function test_change_visitor(){
            //                //console.log('myVisitor : '+$('#myVisitor').text());
            //                $('#myVisitor').text(eval($('#myVisitor').text())+1);
            //               
            //                //console.log('myVisitor_graph_data : '+$('#myVisitor_graph_data').text());
            //               
            //                $('#myVisitor_graph_data').text('2,4,9,7,12,10,120');
            //               
            //                //console.log('myVisitor_graph_data : '+$('#myVisitor_graph_data').text());
            //                $(".peity_bar_good span").peity("bar", {
            //                    colour: "#459D1C"
            //                });
            //            }    
            
        </script>
    </head>
    <body>

        <div class="container-fluid" id="button_group_mainpage">
            <div class="row-fluid" style="margin-top: -10px">
                <div class="span12 center hidden-phone" style="text-align: center;">					
                    <ul class="stat-boxes">
                        <li>
                            <div class="left peity_bar_good" id="sumVisit"><span>2,4,9,7,12,10,12</span>+20%</div>
                            <div class="right">
                                <strong id="myVisit">36094</strong>
                                ผู้เข้าชม
                                <!--                                    Visits-->
                            </div>
                        </li>
                        <li>
                            <div class="left peity_bar_neutral" id="sumMember"><span>20,15,18,14,10,9,9,9</span>0%</div>
                            <div class="right">
                                <strong id="myMember">1433</strong>
                                สมาชิก
                                <!--                                    Users-->
                            </div>
                        </li>
                        <li>
                            <div class="left peity_bar_bad" id="sumVip"><span>3,5,9,7,12,20,10</span>-50%</div>
                            <div class="right">
                                <strong id="myVip">8,650</strong>
                                สมาชิก VIP
                            </div>
                        </li>

                    </ul>
        </div>            
        <div class="span12 center" style="text-align: center;">
                    <ul class="quick-actions-horizontal" >

                            <!-- <li>
                                <a href="#payment_inform" onclick="showPayment_inform()">
                                    <i class="icon-payment_inform"></i>
                                    <span style="width: 130px">แจ้งชำระค่าสินค้า</span>
                                </a>
                            </li> -->
                            <!-- <li>
                                <a href="#shopping_cart" class="scroll-page" onclick="showShoppingCart()">
                                    <i class="icon-shopping-bag"></i>
                                    <span style="width: 130px">จัดการตระกร้าสินค้า</span>
                                </a>
                            </li> --> 
                            <li>
                                <a href="#profile-setting" class="scroll-page" onclick="showProfileSetting()">
                                    <i class="icon-people"></i>
                                    <span style="width: 130px">ข้อมูลผู้ใช้งาน</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" onclick="logout()">
                                    <i class="icon-lockout"></i>
                                    <span style="width: 130px">ออกจากระบบ</span>
                                </a>
                            </li>
                        </ul>

                </div>	
            </div>

        </div>

        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>สวัสดีครับ ยินดีต้อนรับทุกท่านเข้าสู่เว็บไซต์สำหรับคนที่คลั่งไคล้การเขียนโปรแกรม ครับ ^_^</strong> <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันนี้ (01-07-2013) ถือเป็นการเปิดเว็บไซต์ code-aholic อย่างเป็นทางการ 
            ผมและทีมงาน code-aholic จะนำเสนอความรู้ที่สั่งสมมาตลอดเส้นทางการเป็นนักพัฒนาซอฟต์แวร์ให้แก่ผู้ที่สนใจทั่วไปอย่างต่อเนื่อง ทั้งทางด้าน Web, Mobile และ GIS
            
        </div>
    </body>
    <script type="text/javascript">
  

        function showPayment_inform(){
            //แสดงส่วนของตระกร้าสินค้า
             $('#payment_inform').slideDown(2000, function() {
                 $('[data-spy="scroll"]').each(function() {
                     var $spy = $(this).scrollspy('refresh')
                 });                  
                //window.location = '#payment_inform';
             });
        }
    </script>
</html>
