function checkAuthentication() {

    $.ajax({
        url:'../utility/chkLogin.php',
        data:{
            inputUsername:$('input[for="keyUsername"]').val(), 
            inputPassword:$('input[for="keyPassword"]').val()
        },
        dataType:  'json',
        success:function(response){
            //console.log(response);
                        
            if(response.result == 'success'){

                $.gritter.add({
                    title: 'ยินดีต้อนรับเข้าสู่ระบบ',
                    text: 'สวัสดีครับ คุณ '+response.name,
                    image: 'img/demo/client.png',
                    sticky: false
                });

                $('#login-area').slideUp(2000, function() {
                    $('[data-spy="scroll"]').each(function() {
                        var $spy = $(this).scrollspy('refresh')
                    });
                });


                $('#member_register').slideUp(2000, function() {
                    $('[data-spy="scroll"]').each(function() {
                        var $spy = $(this).scrollspy('refresh')
                    });
                }); 

                $('#shopping_cart').hide();
                $('#payment_inform').hide();
                $('#member_register').hide();
                $('#profile-setting').hide();
                
                $('#showProducts_Count').hide();
                $('#showProducts_Count').html('0');

                $.ajax({
                    url:'../utility/REST/getShoppingCart_count.php',
                    //dataType:  'json',
                    success:function(response){
                        //alert(response);
                        $('#showProducts_Count').show();
                        $('#showProducts_Count').html(response);
                    }
                });


                //$('#primary-navigation').scrollspy('refresh');
                //$('#login-area').slideUp(2000).hide(2000);
                //$('#login-area').slideUp(2000).destroy(2000);
                //$('#button_group_mainpage').slideUp(2000).show();

                //$('#login-area').slideDown(2000).show(2000);  
                
                $('#topMenuMember').fadeIn(3000, function() {
                    
                    
                    //                        //Start : เตรียม popover
                    //                        var myContent = 'ชื่อ : '+response.name+'<br/>';
                    //                        //myContent = myContent+'นามสุกล: กาญจนางกูร'+'<br/>';
                    //                        myContent = myContent+'สถานะ : สมาชิก '+ response.member_type +'<br/>';
                    //                        myContent = myContent+'คงเหลือ : '+response.numDateExpire+' วัน'+'<br/>';
                    //
                    //                        $("#testPopver").popover({
                    //                            html:true,
                    //                            animation:true,
                    //                            placement: 'bottom',
                    //                            template: '<div class="popover"><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title"></h3><div class="popover-content"><p></p></div><div class="form-actions" ><span class="pull-left"><a href="#"><img src="img/setting_32x32.png"/></a></span><span class="pull-left"><img src="img/s.gif"/><img src="img/s.gif"/></span><span class="pull-left"><a href="#shopping_cart" class="scroll-page"><img src="img/shopping_cart_32x32.png" /></a></span><span class="pull-right"><input type="button" class="btn btn-inverse" onclick="logout()" value="ออกจากระบบ" /></span></div></div></div>',
                    //                            title:'<span class="pull-left"><a href="#"><img width="23px" src="img/user_profile01_16x16.png"/></a></span>&nbsp;&nbsp;<b style="font-size:large; color:#000000">ข้อมูลส่วนบุคคล</b>',
                    //                            content:myContent,
                    //                            trigger:'hover',
                    //                            myTopOffset:10,
                    //                            delay: {
                    //                                show: 100, 
                    //                                hide: 1500
                    //                            }
                    //                        });
                    
                    
                    $('[data-spy="scroll"]').each(function() {
                        var $spy = $(this).scrollspy('refresh')
                    });
                });

                
                
            //End : เตรียม popover 
                
            }else if(response.result == 'fail'){
                alert('ชื่อผู้ใช้งาน หรือ รหัสผ่านไม่ถูกต้อง');
            }else if(response.result == 'un-activate'){
                //alert('E-mail ของท่านเคยลงทะเบียนไว้แล้ว กรุณายืนยันตัวตนผ่าน Link ที่ระบบส่งไปใหในอีเมล์้, ถ้ามีข้อสงสัยกรุณาติดต่อเรา scada.josh@gmail.com ขอบคุณครับ');
            
                $.gritter.add({
                    title: 'E-mail ของท่านเคยลงทะเบียนไว้แล้ว',
                    text: 'E-mail ของท่านเคยลงทะเบียนไว้แล้ว <br/>กรุณายืนยันตัวตนผ่าน Link ที่ระบบส่งไปให้ในอีเมล์้, <br/>ถ้ามีข้อสงสัยกรุณาติดต่อเรา scada.josh@gmail.com ขอบคุณครับ',
                    image: 'img/demo/client.png',
                    sticky: true
                });
            }else{
                alert('กรุณาติดต่อ Web Master : scada.josh@gmail.com');
            }
                        
                        
        }
    });



                

}

function logout() {
    //$('#login-area').slideDown(2000).show(2000);
    //alert('888');
                
    $.ajax({
        url:'../utility/logout.php',
        //data:{},
        //dataType:  'json',
        success:function(response){
            //alert(response);
            window.location = 'index.php';
        }
    });
}
            
function show_member_register(){
    //$('#member_register').show();
                
    //Start : ส่วนนี้ใช้ Clear form ด้วย jQuery
    $('#form_member_register').find(':input').each(function(){
        var type = this.type, tag = this.tagName.toLowerCase();
        if (type == 'text' || type == 'password' || tag == 'textarea')
            this.value = '';
        else if (type == 'checkbox' || type == 'radio')
            this.checked = true;
        else if (tag == 'select')
            this.selectedIndex = -1;
    });
                
    var validator = $("#form_member_register").validate();
    validator.resetForm();
                
    //End : ส่วนนี้ใช้ Clear form ด้วย jQuery

    $('#member_register').slideDown(2000, function() {
        $('[data-spy="scroll"]').each(function() {
            var $spy = $(this).scrollspy('refresh')
        });                  
    //window.location = 'index.php';
    });
                
}

function showProfileSetting(){

    $.ajax({
        url:'../utility/REST/checkLoginStatus.php',
        //dataType:  'json',
        success:function(returnData){ 
            if(returnData == 'login already'){

            $('#profile-setting').slideDown(2000, function() {
                $('[data-spy="scroll"]').each(function() {
                    var $spy = $(this).scrollspy('refresh')
                });                  
                //window.location('#profile-setting');
            });

            $.ajax({
                url:'../utility/REST/chkUserDetail.php',
                dataType:  'json',
                success:function(response){          
                    if(response.result == 'success'){

                        $('#profile-setting').find('#form_member_setting input:radio[name=memberLevel][value='+response.member_type+']').attr('checked', true);

                        //$('#form_member_setting input:text[name=memberName]').val(response.name);
                        $('#profile-setting').find('#memberName_profile_setting').val(response.name);
                        $('#profile-setting').find('#memberEmail_profile_setting').val(response.email);
                        $('#profile-setting').find('#memberTelephone_profile_setting').val(response.telephone);

                        $('#profile-setting').find('#form_member_setting input:radio[name=memberSex][value='+response.sex+']').attr('checked', true);

                        $('#profile-setting').find('#memberAddress_profile_setting').val(response.address);


                        $('#profile-setting').find('#changePassword_enable').attr('checked', false);
                        $('#profile-setting').find('#password1').val('');
                        $('#profile-setting').find('#password1').attr("disabled", "disabled");
                        $('#profile-setting').find('#password2').val('');
                        $('#profile-setting').find('#password2').attr("disabled", "disabled");

                    }       
                }
            });

    }else{
                alert('กรุณา Login เข้าใช้งานระบบก่อน')
            }
            //login alreadry
        }
    });

}

function generateContentPopover(){

    $.ajax({
        url:'../utility/REST/chkUserDetail.php',
        dataType:  'json',
        success:function(response){          
            if(response.result == 'success'){
                myContent = 'ชื่อ : '+response.name+'<br/>';
                if(response.member_type == 'STANDARD'){
                    myContent = myContent+'สถานะ : สมาชิกแบบทั่วไป<br/>';
                }else{
                    myContent = myContent+'สถานะ : สมาชิก '+response.member_type+'<br/>';
                }
                
                myContent = myContent+'คงเหลือ : '+response.numDateExpire+' วัน'+'<br/>';
            }       
        }
    });
    
    if(myContent){
        return myContent;
    }else{
        myContent = 'ชื่อ : - <br/>';
        myContent = myContent+'สถานะ : สมาชิก - <br/>';
        myContent = myContent+'คงเหลือ : - วัน'+'<br/>';
        return myContent;
    }
    
}

function forgetPassword(){

$.ajax({
        url:'../utility/REST/member_forget_password.php',
        data:{
            memberEmail:$('input[for="member-email-forget_pw"]').val()
        },
        dataType:  'json',
        success:function(response){
            //alert(response.temp);

            if(response.result == 'success'){

                $.gritter.add({
                    title: 'ยืนยันลืมรหัสผ่าน',
                    text: 'เราได้ส่งรหัสผ่านใหม่<br/>ไปยัง Email ของท่านเรียบร้อยแล้วครับ<br/><a href="index.php">กลับหน้า Login</a>',
                    image: 'img/demo/client.png',
                    sticky: true
                });

            }else if((response.result == 'email-not-register')){

                $.gritter.add({
                    title: 'แจ้งเตือน',
                    text: 'Email : '+response.email+' <br/>ของท่านยังไม่เคยลงทะเบียนไว้<br/>กรุณา <a href="index.php">สมัครสมาชิก</a> เพื่อเข้าใช้งานระบบ',
                    image: 'img/demo/client.png',
                    sticky: true
                });

            }
            

            //console.log(response);
                        
            // if(response.result == 'success'){
                            
            //     $.gritter.add({
            //         title: 'ยินดีต้อนรับเข้าสู่ระบบ',
            //         text: 'สวัสดีครับ คุณ '+response.name,
            //         image: 'img/demo/client.png',
            //         sticky: false
            //     });

            //     $('#login-area').slideUp(2000, function() {
            //         $('[data-spy="scroll"]').each(function() {
            //             var $spy = $(this).scrollspy('refresh')
            //         });
            //     });
                
            //     $('#topMenuMember').fadeIn(3000, function() {
                    
            //         $('[data-spy="scroll"]').each(function() {
            //             var $spy = $(this).scrollspy('refresh')
            //         });
            //     });
                
                
            // //End : เตรียม popover
                
            // }else if(response.result == 'fail'){
            //     alert('ชื่อผู้ใช้งาน หรือ รหัสผ่านไม่ถูกต้อง');
            // }else{
            //     alert('กรุณาติดต่อ Web Master : scada.josh@gmail.com');
            // }
                        
                        
        }
    });

}




