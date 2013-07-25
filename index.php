<?php
    session_start();
    //include_once '../utility/check_visitor.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Title -->
        <title>Code - Aholic : เว็บไซต์สำหรับคนที่คลั่งไคล้การเขียนโปรแกรม</title>

        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--        <meta id="viewport" name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />-->
                    
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!-- For iPhone 4 Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114x114-precomposed.png">
        <!-- For iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72x72-precomposed.png">
        <!-- For iPhone: -->
        <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57x57-precomposed.png">

        <!-- Google Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>

        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.css" rel="stylesheet" />
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet" />

        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="css/jquery.gritter.css" />
        <link rel="stylesheet" href="css/firstpage.main.button.css" />
        <link rel="stylesheet" href="./sections/login_regist-section/css/login.css" />
        <!--        <link rel="stylesheet" href="css/style.switcher.css" />-->
        <link rel="stylesheet" href="./sections/member_register-section/css/member_register_css.css" />
        <link rel="stylesheet" href="./sections/shopping_cart-section/css/shopping_cart_css.css" />

        
        <link href="./css/assets/css/docs.css" rel="stylesheet">
        <link href="../lib/google-code-prettify/prettify.css" rel="stylesheet">

        <!-- Add fancyBox -->
        <link rel="stylesheet" href="../lib/jquery-fancyBox-2.1.5/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        



    </head>
    <body data-spy="scroll" data-target="#primary-navigation" style="display: none">


        <!--BEGIN: Navigation -->
        <?php include './sections/navigation-main.php'; ?>
        <!--END: Navigation --> 


        <?php include './sections/project_carousel_section.php'; ?>

        <!--BEGIN: Main Container -->
        <div class="container">
            
            <?php 
                    if(!($_SESSION['sess_id_login'] == session_id())){
                        include './sections/login_regist-section/login_regist_section.php'; 
                    }
                    
            ?>

            <?php include './sections/button_group_mainpage.php'; ?>

            <?php include './sections/member_register-section/member_register_section.php'; ?>
            <?php include './sections/shopping_cart-section/shopping_cart.php'; ?>
            <?php //include './sections/features_section.php'; ?>
            <?php //include './sections/about-section/about_section.php'; ?>
            <?php //include './sections/services_section.php'; ?>
            <?php //include './sections/payment_inform-section/payment_inform.php'; ?>
            <?php //include './sections/products-section/products_section.php'; ?>
            <?php include './sections/profile-settings-section/profile-setting.php'; ?>
            <?php include './sections/developer-tools-section/developer-tools-section.php'; ?>
            <?php include './sections/training-section/training_section.php'; ?>

        </div>
        <!-- /.container --> 
        <!--END: Main Container --> 


        <?php include './sections/contact_section.php'; ?>




<!-- <a class="fancybox-media" href="http://www.youtube.com/watch?v=Tzo7cpacpXE" title="การใช้งาน Area Chart" data-caption="<a href='{new link}' >See more</a>">Youtube</a>
                    
                    <a class="fancybox-media2" href="http://www.youtube.com/watch?v=Tzo7cpacpXE" >Youtube2</a>

                    <a class="video1"  title="The Falltape" href="http://www.youtube.com/v/ZeStnz5c2GI?fs=1&amp;autoplay=1">Test1</a> 

                    <a class="video2"  title="การใช้งาน Area Chart">Test2</a>-->
        <!--BEGIN: Project Carousel-->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="span4 copyright"> <small>&copy; Copyright 2013. All rights reserved</small> </div>
                    <div class="span8 footer-links"> <a href="#home" title="Home" class="scroll-page">HOME</a> | <a href="#Training" title="TRAINING" class="scroll-page">TRAINING</a> | <a href="#contact" title="Contact" class="scroll-page">CONTACT</a> </div>
                </div>
            </div>
        </footer>
        <!--END: Footer--> 

        

    </body>
    <!-- Scripts --> 
        <script src="js/jQuery/jquery.js"></script> 
<!--        <script src="js/bootstrap.min.js"></script> -->
        <script src="js/bootstrap.js"></script> 
        <script src="js/custom.js"></script>
        <script src="js/jquery.gritter.min.js"></script>
        <script src="js/jquery.peity.min.js"></script>
        <script src="js/firstpage.main.button.js"></script>
        <script type="text/javascript" src="./sections/login_regist-section/js/login.js"></script>
        <script src="js/custom_ShowGritter.js"></script>
<!--        <script src="js/bootstrap-tooltip.js"></script>-->
<!--        <script src="js/bootstrap-popover.js"></script>-->
<!--        <script src="js/style.swithcer.js"></script>-->
        <script type="text/javascript" src="js/initial.js"></script>
        <script src="sections/member_register-section/js/jquery.validate.min.js"></script> 
        <script src="sections/member_register-section/js/member_register_js.js"></script> 
        <script src="sections/profile-settings-section/js/member_profile-settings_js.js"></script> 
        <script src="sections/shopping_cart-section/js/shopping_cart_js.js"></script>
        <script src="js/myFunction.js"></script> 
        <script src="js/GLOBAL_VAR.js"></script> 

        <!-- Add jQuery library -->
          <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> -->

          <!-- Add mousewheel plugin (this is optional) -->
          <script type="text/javascript" src="../lib/jquery-fancyBox-2.1.5/lib/jquery.mousewheel-3.0.6.pack.js"></script>
          <!-- Add fancyBox -->
          <link rel="stylesheet" href="../lib/jquery-fancyBox-2.1.5/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
          <script type="text/javascript" src="../lib/jquery-fancyBox-2.1.5/source/jquery.fancybox.pack.js?v=2.1.5"></script>
          <!-- Optionally add helpers - button, thumbnail and/or media -->
          <link rel="stylesheet" href="../lib/jquery-fancyBox-2.1.5/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
          <script type="text/javascript" src="../lib/jquery-fancyBox-2.1.5/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
          <script type="text/javascript" src="../lib/jquery-fancyBox-2.1.5/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
          <link rel="stylesheet" href="../lib/jquery-fancyBox-2.1.5/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
          <script type="text/javascript" src="../lib/jquery-fancyBox-2.1.5/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
          
          <link href="../lib/zozo.tabs.5.0/css/zozo.examples.min.css" rel="stylesheet" />
          <link href="../lib/zozo.tabs.5.0/css/zozo.tabs.min.css" rel="stylesheet">
          <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
          <!-- <script src="../lib/zozo.tabs.5.0/js/jquery.min.js"></script> -->
          <script src="../lib/zozo.tabs.5.0/js/jquery.easing.min.js"></script>
          <script src="../lib/zozo.tabs.5.0/js/zozo.tabs.min.js"></script>
          
          <script src="../lib/holder/holder.js"></script>
          <script src="../lib/google-code-prettify/prettify.js"></script>

          <!-- Add mousewheel plugin (this is optional) -->
          <script type="text/javascript" src="../lib/jquery-fancyBox-2.1.5/lib/jquery.mousewheel-3.0.6.pack.js"></script>

          <!-- Add fancyBox -->
          <link rel="stylesheet" href="../lib/jquery-fancyBox-2.1.5/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
          <script type="text/javascript" src="../lib/jquery-fancyBox-2.1.5/source/jquery.fancybox.pack.js?v=2.1.5"></script>

          <!-- Optionally add helpers - button, thumbnail and/or media -->
          <link rel="stylesheet" href="../lib/jquery-fancyBox-2.1.5/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
          <script type="text/javascript" src="../lib/jquery-fancyBox-2.1.5/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
          <script type="text/javascript" src="../lib/jquery-fancyBox-2.1.5/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

          <link rel="stylesheet" href="../lib/jquery-fancyBox-2.1.5/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
          <script type="text/javascript" src="../lib/jquery-fancyBox-2.1.5/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

        <script type="text/javascript">
        
            $(function(){

              window.prettyPrint && prettyPrint();


               $('.fancybox-media2').fancybox({
                  openEffect  : 'none',
                  closeEffect : 'none',
                  helpers : {
                    media : {}
                }
            });

                $('.fancybox-media').fancybox({
                  openEffect  : 'none',
                  closeEffect : 'none',
                  helpers : {
                    //media : {}
                    media: true,
                    title : { type : 'inside' }
                },
                youtube : {
                    autoplay: 1,
                    hd: 1,
                    vq: 'hd720'
                },
                beforeShow: function(){
                   this.title = this.title + " " + $(this.element).data("caption");
               }
            });

                $('.video1').fancybox({
                  openEffect  : 'none',
                  closeEffect : 'none',
                  helpers : {
                    media : {}
                }
            });

                $(".video2").click(function() {

                var temp = 'http://www.youtube.com/v/Tzo7cpacpXE?fs=1&amp;autoplay=1';

                 $.fancybox({
                      'title'        : this.title,
                      'href'         : 'http://www.youtube.com/v/Tzo7cpacpXE',
                      //'href'         : temp.replace(new RegExp("watch\\?v=", "i"), 'v/'),
                      'type'         : 'swf',
                      'swf'          : {
                         'wmode'            : 'transparent',
                         'allowfullscreen'  : 'true'
                     },
                     // openEffect  : 'none',
                     // closeEffect : 'none',
                     helpers : {
                        //media : {}
                        media: true,
                        title : { type : 'inside' }
                    },
                    youtube : {
                        autoplay: 1,
                        hd: 1,
                        vq: 'hd720'
                    }
                });

                 return false;

             });



/* jQuery activation and setting options for the first tabs*/
$("#tabbed-nav").zozoTabs({
  position: "top-left",
  autoContentHeight:true,
  theme: "red",
  rounded: false,
  shadows: true,
  size: "large",
  orientation: "vertical",
  responsive: true,
  responsiveDelay: 0,
  defaultTab: "tab2",
  style: "underlined",
  animation2: {
    easing: "easeInOutExpo",
    duration: 600,
    effects: "slideH",
    type: "css"
  }
});


            });

            
            function switchToAddPage(myGoto){

                $('body').hide().fadeOut(2000,function(){
                
                    $('.container').hide().slideUp(2000,function(){
                        window.location = myGoto;
                    });
                
                });         
            }

        </script>
</html>