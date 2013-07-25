<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script src="js/jQuery/jquery.js"></script>
        <script type="text/javascript">

            $(function(){

                //alert('5555');

                $('#changePassword_enable').change(function(){

                    //alert($('#changePassword_enable').is(':checked'));

                    // if($('#changePassword_enable').is(':checked')){

                    // }else{

                        $('#form_member_setting  #password1').val('');
                        $('#form_member_setting  #password2').val('');

                        $('#form_member_setting #password1').attr('disabled', !$('#changePassword_enable').is(':checked'));
                        $('#form_member_setting #password2').attr('disabled', !$('#changePassword_enable').is(':checked'));

                    //}
                    //$('input[name=foo]').is(':checked')
                    //$('input[name=foo]').attr('checked')


                });

            });

            function member_profile_setting(){

                if($("#form_member_setting").validate().form()){

                    //alert('55');

                    if(($('#changePassword_enable').is(':checked')) && (($('#form_member_setting #password1').val()).trim() == "") && (($('#form_member_setting #password2').val()).trim()=="")){

                        alert('กรุณากรอกรหัสผ่านและยืนยันรหัสผ่าน');
                        $('#form_member_setting  #password1').val('');
                        $('#form_member_setting  #password2').val('');
                        $('#form_member_setting  #password1').focus();

                        return false;
                    }

                    if($('#form_member_setting #password1').val() == $('#form_member_setting #password2').val()){

                        var params = { memberEmail:$('#profile-setting').find('#form_member_setting #memberEmail_profile_setting').val() };
                        //var str = $.param(params);
                        //alert(params);

                        $.ajax({
                        url: '../utility/REST/member_manager_profile_setting.php',
                        cache: false,
                        data : $('#profile-setting').find('#form_member_setting').serialize()+ '&' + $.param(params),
                        success: function(data) {
                                //alert(data);
                                //alert(data.trim().length);
                                if(data.trim() == 'success'){

                                    $.gritter.add({
                                        title: 'แจ้งเตือน',
                                        text: 'บันทึกข้อมูลสำเร็จ',
                                        image: 'img/demo/client.png',
                                        sticky: false
                                    });

                                    myReset_Member_profile_setting();

                                }
                                

                            }
                        });

                    }else{
                        alert('กรุณากรอกรหัสผ่านและยืนยันรหัสผ่านอีกครั้ง');
                        $('#form_member_setting  #password1').val('');
                        $('#form_member_setting  #password2').val('');
                        $('#form_member_setting  #password1').focus();
                    }

                    



                }else{
                    //alert('66');
                }
                
                return false;
        
                
            }
            
            function myReset_Member_profile_setting(){
                var validator = $('#profile-setting').find("#form_member_setting").validate();
                validator.resetForm();

                $('#profile-setting').slideUp(2000, function() {
                    $('[data-spy="scroll"]').each(function() {
                        var $spy = $(this).scrollspy('refresh')
                    });

                    //window.location = 'index.php';
                }); 
            }
        </script>
    </head>
    <body>

        <!--BEGIN: Features -->
        <section id="profile-setting" >
            <article class="page">
                <div class="row">
                    <div class="span12">
                        <h2 class="page-title">ข้อมูลสมาชิก<a class="to-top scroll-page" href="#home" title="To Top"><i class="icon-chevron-up"></i></a></h2>
                    </div>
                </div>

                

<!--                ฟอร์มข้อมูลสมาชิก-->
                <div class="row">
                    <div class="span3"></div>
                    <div class="span6">
                        <form class="form-horizontal" method="POST" id="form_member_setting" onsubmit="return member_profile_setting();" >
                            <fieldset>
                                <legend>ข้อมูลสมาชิก</legend>
                                <div class="control-group">
                                    <label class="control-label">ประเภทสมาชิก<span style="color: red">*</span></label>
                                    <div class="controls">
                                        <label class="radio">
                                            <input type="radio" name="memberLevel"  value="STANDARD" checked>สมาชิกทั่วไป
                                        </label>
                                        <label class="radio">
                                            <span class="vip_privilege"><input type="radio" name="memberLevel" value="VIP">สมาชิก VIP <small >(350 บาท/ปี)</small></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">ชื่อ-นามสกุล<span style="color: red">*</span> : </label>
                                    <div class="controls">
                                        <input name="memberName" id="memberName_profile_setting" type="text">
                                        <!-- <input name="memberName" type="text"> -->
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Email Address<span style="color: red">*</span> : </label>
                                    <div class="controls">
                                        <input type="text" name="memberEmail" id="memberEmail_profile_setting" placeholder="อีเมล์ (Email Address)" autocomplete="off" disabled>
                                        <!-- <input type="text" name="memberEmail" placeholder="อีเมล์ (Email Address)" autocomplete="off" disabled> -->
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">เบอร์โทรศัพท์ : </label>
                                    <div class="controls">
                                        <input name="memberTel" id="memberTelephone_profile_setting" type="text" placeholder="08xxxxxxxx">
                                        <!-- <input name="memberTel"  type="text" placeholder="08xxxxxxxx"> -->
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">เพศ<span style="color: red">*</span></label>
                                    <div class="controls">
                                        <label class="radio inline">
                                            <input type="radio" name="memberSex" value="male" checked>
                                            ชาย
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="memberSex" value="female">หญิง
                                        </label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">ที่อยู่<span style="color: red">*</span> : </label>
                                    <div class="controls">
                                        <textarea name="memberAddress" id="memberAddress_profile_setting" placeholder="ที่อยู่สำหรับจัดส่งสินค้า"></textarea>
                                        <!-- <textarea name="memberAddress" placeholder="ที่อยู่สำหรับจัดส่งสินค้า"></textarea> -->
                                        <!--                                    <span class="help-block">กรุณากรอกที่อยู่ให้ถูกต้อง</span>-->
                                    </div>
                                </div>
                                <!-- <div class="control-group">
                                    <label class="control-label">ต้องการเปลี่ยนรหัสผ่าน</label>
                                    <div class="checkbox">
                                        <input type="checkbox"> ต้องการเปลี่ยนรหัสผ่าน
                                    </div>
                                </div> -->
                                <div class="control-group">
                                    <label class="control-label"></label>
                                    <div class="controls">
                                        <label class="checkbox">
                                            <input type="checkbox" name="changePassword_enable" id="changePassword_enable">ต้องการเปลี่ยนรหัสผ่าน
                                        </label>
                                    </div>
                                </div>
                                <!-- <label class="checkbox">
                                  <input type="checkbox"> Check me out
                              </label> -->
                                <div class="control-group">
                                    <label class="control-label">เปลี่ยนรหัสผ่าน<span style="color: red">*</span> : </label>
                                    <div class="controls">
                                        <input id="password1" name="password1" type="password" disabled>
                                        <!-- <input  name="password1" type="password"> -->
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">ยืนยันเปลี่ยนรหัสผ่าน<span style="color: red">*</span> : </label>
                                    <div class="controls">
                                        <input id="password2" name="password2" type="password" disabled>
                                        <!-- <input name="password2" type="password"> -->
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">บันทึก</button>
                                    <button type="reset" onclick="myReset_Member_profile_setting()" class="btn btn-primary">ยกเลิก</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="span3"></div>
                </div>



            </article>
        </section>
        <!--END: Features --> 
    </body>
</html>
