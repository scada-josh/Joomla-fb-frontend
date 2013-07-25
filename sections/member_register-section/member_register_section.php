<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>

        <script type="text/javascript">
            function register_new_member(){
                
                if($("#form_member_register").validate().form()){
                    //alert($('#password1').val());
                    //alert($('#password2').val());
                    
                    if($('#password1').val() == $('#password2').val()){
                        $.ajax({
                            url: '../utility/REST/member_manager.php',
                            cache: false,
                            data : $('#form_member_register').serialize(),
                            success: function(data) {
                                //alert(data);
                                //alert(data.trim().length);
                                if(data.trim() == 'success'){
                                    
                                    //alert("บันทึกข้อมูลสำเร็จ, กรุณายืนยันการลงทะเบียนใน Email ของท่าน.");
                                    
                                    $.gritter.add({
                                        title: 'บันทึกข้อมูลสำเร็จ',
                                        text: 'กรุณายืนยันการลงทะเบียนใน Email ของท่าน.',
                                        image: 'img/demo/client.png',
                                        sticky: false
                                    });
                                    
                                    $('#member_register').slideUp(3000, function() {
                                        $('[data-spy="scroll"]').each(function() {
                                            var $spy = $(this).scrollspy('refresh')
                                        });

                                        window.location = 'index.php';
                                    }); 
                                }else{
                                    
                                    if(data.trim() == 'email is repeat'){
                                        alert("email ของคุณ, เคยลงทะเบียนไว้แล้ว");
                                        $('#memberEmail').val('');
                                        $('#memberEmail').focus();
                                    }else{
                                        alert('ไม่สามารถบันทึกข้อมูลได้');
                                    }
                                }
                                

                            }
                        });
                    }else{
                        alert('กรุณากรอกรหัสผ่านและยืนยันรหัสผ่านอีกครั้ง');
                        $('#password1').val('');
                        $('#password2').val('');
                        $('#password1').focus();
                    }
                    
                    
                    //return false;
                
                }else{
                    //return false;
                }
                
                
                return false;
        
                
            }
            
            function myResetForm(){
                var validator = $("#form_member_register").validate();
                validator.resetForm();

                $('#member_register').slideUp(3000, function() {
                    $('[data-spy="scroll"]').each(function() {
                        var $spy = $(this).scrollspy('refresh')
                    });

                    window.location = 'index.php';
                }); 
            }
        </script>
    </head>
    <body>
        <!--BEGIN: member register -->
        <section id="member_register">
            <article class="page">
                <div class="row">
                    <div class="span12">
                        <h2 class="page-title">สมัครสมาชิกใหม่ <a class="to-top scroll-page" href="#home" title="To Top"><i class="icon-chevron-up"></i></a></h2>
                    </div>
                </div>


                <div class="row">
                    <div class="span3"></div>
                    <div class="span6">
                        <form class="form-horizontal" method="POST" id="form_member_register" onsubmit="return register_new_member();" >
                            <fieldset>
                                <legend>ข้อมูลสมาชิก</legend>
                                <div class="control-group">
                                    <label class="control-label">ประเภทสมาชิก<span style="color: red">*</span></label>
                                    <div class="controls">
                                        <label class="radio">
                                            <input type="radio" name="memberLevel" id="memberRadios1" value="STANDARD" checked>สมาชิกทั่วไป
                                        </label>
                                        <!-- <label class="radio">
                                             <span class="vip_privilege"><input type="radio" name="memberLevel" id="memberRadios2" value="VIP">สมาชิก VIP <small >(350 บาท/ปี)</small></span> 
                                        </label> -->
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="memberName">ชื่อ-นามสกุล<span style="color: red">*</span> : </label>
                                    <div class="controls">
                                        <input name="memberName" type="text">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="memberEmail">Email Address<span style="color: red">*</span> : </label>
                                    <div class="controls">
                                        <input type="text" name="memberEmail" id="memberEmail" placeholder="อีเมล์ (Email Address)" autocomplete="off">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="memberTel">เบอร์โทรศัพท์ : </label>
                                    <div class="controls">
                                        <input name="memberTel" type="text" placeholder="08xxxxxxxx">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">เพศ<span style="color: red">*</span></label>
                                    <div class="controls">
                                        <label class="radio inline">
                                            <input type="radio" name="memberSex" id="sexRadios1" value="male" checked>
                                            ชาย
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="memberSex" id="sexRadios2" value="female">หญิง
                                        </label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="memberAddress">ที่อยู่<span style="color: red">*</span> : </label>
                                    <div class="controls">
                                        <textarea name="memberAddress" placeholder="ที่อยู่สำหรับจัดส่งสินค้า"></textarea>
                                        <!--                                    <span class="help-block">กรุณากรอกที่อยู่ให้ถูกต้อง</span>-->
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="password1">รหัสผ่าน<span style="color: red">*</span> : </label>
                                    <div class="controls">
                                        <input id="password1" name="password1" type="password">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="password2">ยืนยันรหัสผ่าน<span style="color: red">*</span> : </label>
                                    <div class="controls">
                                        <input id="password2" name="password2" type="password">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
                                    <button type="reset" onclick="myResetForm()" class="btn btn-primary">ยกเลิก</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="span3"></div>
                </div>


            </article>
        </section>
        <!--END: member register --> 
    </body>
</html>
