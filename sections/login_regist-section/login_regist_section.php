<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <!--BEGIN: Features -->
        <section id="login-area"  >
            <div id="loginbox">            
                <form id="loginform" class="form-vertical" action="index.html">
                    <p>กรุณากรอกชื่อผู้ใช้งานและรหัสผ่าน<span class="hidden-phone">เพื่อเข้าสู่ระบบ</span></p>
                    <div class="control-group">
                        <div class="controls">
                            <div class="input-prepend"> 
                                <span class="add-on"><i class="icon-user"></i></span><input  type="text" for="keyUsername" placeholder="Email Address" />
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-lock"></i></span><input for="keyPassword" type="password" placeholder="Password" id="inputPassword_login_page"/>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="control-group">
                        <div class="controls"> -->
                            <div class="form-actions">
                                <span class="pull-left"><a href="#" class="flip-link" id="to-recover">ลืมรหัสผ่าน?</a></span>
                                <span class="pull-left">&nbsp;|&nbsp;</span>
                                <span class="pull-left"><a href="#member_register" onclick="show_member_register()" class="scroll-page" id="to-recover2">สมัครสมาชิก?</a></span>
                                <span class="pull-right"><input type="button" onclick="checkAuthentication();" class="btn btn-inverse" value="เข้าสู่ระบบ" /></span>
                            </div>
                       <!--  </div>
                    </div> -->
                </form>
                <form id="recoverform" action="#" class="form-vertical">
<!--                    <p>Enter your e-mail address below and we will send you instructions how to recover a password.</p>-->
                    <p>กรุณากรอก e-mail address ในช่องข้างล่าง <br/>ระบบจะส่งข้อความยืนยันเข้าอีเมล์เพื่อยืนยันการลืมรหัสผ่าน</p>
                    <div class="control-group">
                        <div class="controls">
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-envelope"></i></span><input for="member-email-forget_pw" type="text" placeholder="E-mail address" />
                            </div>
                        </div>
                    </div>
                  <!--   <div class="control-group">
                        <div class="controls"> -->
                            <div class="form-actions">
                                <span class="pull-left"><a href="#" class="flip-link" id="to-login">&lt;&lt;&nbsp;Login</a></span>
                                <span class="pull-right"><input type="button" onclick="forgetPassword();" class="btn btn-inverse" value="ยืนยันลืมรหัสผ่าน" /></span>
                            </div>
                        <!-- </div>
                    </div> -->
                </form>
            </div>
            





            <!--            <article class="page">-->
            <!--                <div class="row">
                                <div class="span12">
                                    <h2 class="page-title">เข้าสู่ระบบ <a class="to-top scroll-page" href="#home" title="To Top"><i class="icon-chevron-up"></i></a></h2>
                                </div>
                            </div>-->
            <!--                <div class="row">
                                <div class="span4">
                                    <div class="well layers">
                                        <h3>Amazing Features</h3>
                                        <p>This theme has tons of amazing features. Tabs, lightbox, carausel and many more</p>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="well layers">
                                        <h3>Responsive</h3>
                                        <p>This theme will work on any device any resolution. Cool...isn't it.</p>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="well layers">
                                        <h3>Top Notch Support</h3>
                                        <p>If you're having any problems, I am ready to help. Totally free support.</p>
                                    </div>
                                </div>
                            </div>-->

            <!--            </article>-->
        </section>
        <!--END: Features --> 
    </body>
    <script type="text/javascript" src="js/jQuery/jquery.js"></script> 
    <script type="text/javascript">
    $(function(){

            $('#inputPassword_login_page').keyup(function(event) { 
               if (event.keyCode == 13) { 
                    checkAuthentication();
                }
            });
            
    });
        
    </script>
</html>
