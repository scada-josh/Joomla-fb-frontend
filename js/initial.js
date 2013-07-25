$(document).ready(function() {  
    //$('body').hide().slideDown(2000);
    $('body').hide().fadeIn(2000, function(){
        //$('.container').hide().slideDown(2000);
        //$('#myLogo').attr('height', 'px');
        });
                
                
    //    var myContent = '<div style="width:100%; text-align:left">12<br/>34</div>';
    //    myContent = myContent+'<div style="width:100%; color:red"><a href="#" id="testPopver" class="btn btn-small btn-danger pull-left" onclick="alert()">Setting</a><a href="#" id="testPopver" class="btn btn-small btn-danger pull-right" onclick="alert()">ออกจากระบบ</a></div>';
    //                  
    //    myContent = '<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3>Modal header</h3></div>';
    //    myContent = myContent+ '<div class="modal-body"><p>One fine body</p></div>';
    //    myContent = myContent+'<div class="modal-footer"><a href="#" class="btn pull-left">Close</a><a href="#" class="btn btn-primary">Save changes</a></div>';
  
  
  
    //    var myContent = 'ชื่อ : อนุสรณ์ กาญจนางกูร'+'<br/>';
    //    //myContent = myContent+'นามสุกล: กาญจนางกูร'+'<br/>';
    //    myContent = myContent+'สถานะ : สมาชิก VIP'+'<br/>';
    //    myContent = myContent+'คงเหลือ : 123 วัน'+'<br/>';
                 
    //generateContentPopover();

var position_popover = "bottom";

    if($(window).width() < 479)
    {
        // ul.css({
        //     'display':'none'
        // });
        // fix_position();

            // is this an IPad ?
            var isiPad = (navigator.userAgent.match(/iPad/i) != null);

            // is this an iPhone ?
            var isiPhone = (navigator.userAgent.match(/iPhone/i) != null);

            // is this an iPod ?
            var isiPod = (navigator.userAgent.match(/iPod/i) != null);
            
            if(isiPad){
                alert('This is iPAD ...resize and < 479');
            }else if(isiPhone){
                //alert('This is isiPhone ...resize and < 479');
                position_popover = "right";
            }else if(isiPod){
                alert('This is iPOD ...resize and < 479');
            }else{
                if($(window).width()<475){
                    //alert('This is Other ...resize and ( < 479 and <700)');
                }else{
                    //alert('This is Other ...resize and < 479');
                }
                
                
            }
            
        //console.log('< 479');
        //console.log($(window).width());

    }



    $("#testPopver").popover({
        html:true,
        animation:true,
        placement: position_popover,
        template: '<div class="popover"><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title"></h3><div class="popover-content"><p></p></div><div class="form-actions" ><span class="pull-left"><a  href="#profile-setting" onclick="showProfileSetting()" class="scroll-page"><img src="img/setting_32x32.png"/></a></span><span class="pull-left"><img src="img/s.gif"/><img src="img/s.gif"/></span><span class="pull-left"><a href="#shopping_cart" class="scroll-page"><img src="img/shopping_cart_32x32.png" /></a></span><span class="pull-right"><input type="button" class="btn btn-inverse" onclick="logout()" value="ออกจากระบบ" /></span></div></div></div>',
        title:'<span class="pull-left"><a href="#"><img width="23px" src="img/user_profile01_16x16.png"/></a></span>&nbsp;&nbsp;<b style="font-size:large; color:#000000">ข้อมูลส่วนบุคคล</b>',
        //content:myContent,
        content:generateContentPopover,
        trigger:'hover',
        myTopOffset:10,
        delay: {
            show: 100, 
            hide: 1500
        }
    });
    
    
    //
    $('#shopping_cart').hide();
    //$('#payment_inform').hide();
    $('#member_register').hide();
    $('#profile-setting').hide();

    $.ajax({
        url:'../utility/REST/getShoppingCart_count.php',
        success:function(response){
            //alert(response);
            $('#showProducts_Count').show();
            $('#showProducts_Count').html(response);
        }
    });
    
    //    $('#payment_inform').show();
    //    $('#shopping_cart').show();
    //    $('#member_register').show();

    $('.vip_privilege').popover({
        html:true,
        animation:true,
        placement: 'bottom',
        //title:'<span class="pull-left"><i class="icon-gift"></i></span>&nbsp;&nbsp;<b style="font-size:x-small; color:#000000">สิทธิพิเศษสำหรับสมาชิก</b>',
        title:'<img src="img/money_16x16.png"/>&nbsp;&nbsp;สิทธิพิเศษสำหรับสมาชิก',
        content:'1. ส่วนลดการสั่งซื้อสินค้า 15 % <br/> 2. สามารถชมวิดีโอได้ไม่จำกัด<br/> 3. Download Source Code ที่เกี่ยวข้องไม่จำกัด',
        trigger:'hover',
        //myTopOffset:10,
        delay: {
            show: 100, 
            hide: 100
        }
    });
    
    
    //Start : เช็คสถานะ Login
    
    $.ajax({
        url:'../utility/REST/checkLoginStatus.php',
        success:function(response){
            //alert(response);
            if(response == 'not login'){
                $('#topMenuMember').hide();
            }
        }
    });
    
    
    
    //End :  เช็คสถานะ Login
    
    
    //Start : เก็บจำนวนผู้เข้าเยี่ยมชม และสรุปข้อมูลต่างๆ
    $.ajax({
        url:'../utility/check_visitor_production.php',
        data:{},
        dataType:  'json',
        success:function(response){
            //alert(response);
            //console.log(response);
            //console.log(response.visit_num);
                
            //Start : นับจำนวนผู้เข้าชม
            if(response.visit_trend == '+'){
                $('#sumVisit').removeClass();
                $('#sumVisit').addClass('left peity_bar_good');
            }else if(response.visit_trend == '-'){
                $('#sumVisit').removeClass();
                $('#sumVisit').addClass('left peity_bar_bad');
            }else{
                $('#sumVisit').removeClass();
                $('#sumVisit').addClass('left peity_bar_neutral');
            }
                
            $('#myVisit').text(response.visit_num);
            $('#sumVisit').html('<span>'+response.visit_stat_7d+'</span>'+response.visit_trend+''+response.visit_percent_last2d+'%');
            //End : นับจำนวนผู้เข้าชม
                
            //Start : นับจำนวนสมาชิก Standard
            if(response.member_trend == '+'){
                $('#sumMember').removeClass();
                $('#sumMember').addClass('left peity_bar_good');
            }else if(response.member_trend == '-'){
                $('#sumMember').removeClass();
                $('#sumMember').addClass('left peity_bar_bad');
            }else{
                $('#sumMember').removeClass();
                $('#sumMember').addClass('left peity_bar_neutral');
            }
                
            $('#myMember').text(response.member_num);
            $('#sumMember').html('<span>'+response.member_stat_7d+'</span>'+response.member_trend+''+response.member_percent_last2d+'%');
            //End : นับจำนวนสมาชิก Standard
                
            //Start : นับจำนวนสมาชิก VIP
            if(response.vip_trend == '+'){
                $('#sumVip').removeClass();
                $('#sumVip').addClass('left peity_bar_good');
            }else if(response.vip_trend == '-'){
                $('#sumVip').removeClass();
                $('#sumVip').addClass('left peity_bar_bad');
            }else{
                $('#sumVip').removeClass();
                $('#sumVip').addClass('left peity_bar_neutral');
            }
                
            $('#myVip').text(response.vip_num);
            $('#sumVip').html('<span>'+response.vip_stat_7d+'</span>'+response.vip_trend+''+response.vip_percent_last2d+'%');
            //End : นับจำนวนสมาชิก VIP
                
            //Start : นับจำนวนสมาชิก Order
            if(response.order_trend == '+'){
                $('#sumOrder').removeClass();
                $('#sumOrder').addClass('left peity_bar_good');
            }else if(response.order_trend == '-'){
                $('#sumOrder').removeClass();
                $('#sumOrder').addClass('left peity_bar_bad');
            }else{
                $('#sumOrder').removeClass();
                $('#sumOrder').addClass('left peity_bar_neutral');
            }
                
            $('#myOrder').text(response.order_num);
            $('#sumOrder').html('<span>'+response.order_stat_7d+'</span>'+response.order_trend+''+response.order_percent_last2d+'%');
            //End : นับจำนวนสมาชิก Order
                

            // === jQuery Peity === //
            $.fn.peity.defaults.line = {
                strokeWidth: 1,
                delimeter: ",",
                height: 24,
                max: null,
                min: 0,
                width: 50
            };
            $.fn.peity.defaults.bar = {
                delimeter: ",",
                height: 24,
                max: null,
                min: 0,
                width: 50
            };
            $(".peity_line_good span").peity("line", {
                colour: "#B1FFA9",
                strokeColour: "#459D1C"
            });
            $(".peity_line_bad span").peity("line", {
                colour: "#FFC4C7",
                strokeColour: "#BA1E20"
            });	
            $(".peity_line_neutral span").peity("line", {
                colour: "#CCCCCC",
                strokeColour: "#757575"
            });
            $(".peity_bar_good span").peity("bar", {
                colour: "#459D1C"
            });
            $(".peity_bar_bad span").peity("bar", {
                colour: "#BA1E20"
            });	
            $(".peity_bar_neutral span").peity("bar", {
                colour: "#757575"
            });
                
                
        }
    });
    //End : เก็บจำนวนผู้เข้าเยี่ยมชม





});

//function timer_trigger(){
//    
//
//    
//    $('#myVisitor').text(eval($('#myVisitor').text())+1);
//    countdown = setTimeout('timer_trigger()', 1000);
//
//}


