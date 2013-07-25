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
        <meta id="viewport" name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

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
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet" />

        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    </head>
    <body data-spy="scroll" data-target="#primary-navigation">

        <!--BEGIN: Navigation -->
        <div class="navbar navbar-fixed-top" id="primary-navigation">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                    </a>
                    <a href="#home" class="brand scroll-page"><img src="img/code-aholic_logo.png" alt="your slogan here"></a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li><a href="index.php#home" title="Home" >HOME</a></li>
                            <li><a href="#features" title="Features" class="scroll-page">FEATURES</a></li>
                            <li><a href="#about" title="About" class="scroll-page">ABOUT</a></li>
                            <li><a href="#services" title="Services" class="scroll-page">SERVICES</a></li>
                            <li><a href="#work" title="Work" class="scroll-page">WORK</a></li>
                            <li  class="active"><a href="#iui-001-basic" title="Training" class="scroll-page">Training</a></li>
                            <li><a href="#contact" title="Contact" class="scroll-page">CONTACT</a></li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse --> 
                </div>
                <!-- /.container --> 
            </div>
            <!-- /.navbar-inner --> 
        </div>
        <!-- /.navbar --> 
        <!--END: Navigation --> 


        <!--BEGIN: Project Carousel-->
        <section class="project-carousel" >
            <div class="container" >
                <div class="row" >
                    <div class="span12" style="padding-top:0px;" >

                    </div>
                </div>
            </div>
        </section>
        <!--END: Project Carousel--> 

        <!--BEGIN: Main Container -->
        <div class="container">
            <?php include './contents/training/iui-001-basic/index.php'; ?>
        </div>
        <!-- /.container --> 
        <!--END: Main Container --> 


        <?php include './sections/contact_section.php'; ?>

        <?php include './sections/footer_section.php'; ?>

        <!-- Scripts --> 
        <script src="js/jQuery/jquery.js"></script> 
        <script src="js/bootstrap.min.js"></script> 
        <script src="js/custom.js"></script>
    </body>
</html>