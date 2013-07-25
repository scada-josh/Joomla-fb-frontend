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
                            <li class="active"><a href="#home" title="Home" class="scroll-page">HOME</a></li>
                            <li><a href="#features" title="Features" class="scroll-page">FEATURES</a></li>
                            <li><a href="#about" title="About" class="scroll-page">ABOUT</a></li>
                            <li><a href="#services" title="Services" class="scroll-page">SERVICES</a></li>
                            <li><a href="#work" title="Work" class="scroll-page">WORK</a></li>
                            <li><a href="#josh" title="Contact" class="scroll-page">JOSH</a></li>
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

        
        <?php include './sections/project_carousel_section.php'; ?>

        <!--BEGIN: Main Container -->
        <div class="container">
            <p>&nbsp;</p>
            <div class="row">
                <div class="span12">
                    <div class="action layers">
                        <div class="action-inside clearfix">
                            <h2>Welcome to Awesome Company. Ultimate single page biz theme.</h2>
                            <p>Nulla at ultrices neque. Cras metus erat, pulvinar vel interdum eu, interdum et nibh.</p>
                        </div>
                    </div>
                </div>
            </div>

            <?php include './sections/features_section.php'; ?>
            <?php include './sections/about-section/about_section.php'; ?>
            <?php include './sections/services_section.php'; ?>
            <?php include './sections/work-section/work_section.php'; ?>
            <?php include './sections/test_section.php'; ?>
        </div>
        <!-- /.container --> 
        <!--END: Main Container --> 

        
        <?php include './sections/contact_section.php'; ?>

        <!--BEGIN: Project Carousel-->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="span4 copyright"> <small>&copy; Copyright 2012. All rights reserved</small> </div>
                    <div class="span8 footer-links"> <a href="#home" title="Home" class="scroll-page">HOME</a> | <a href="#services" title="Services" class="scroll-page">SERVICES</a> | <a href="#features" title="Features" class="scroll-page">FEATURES</a> | <a href="#work" title="Work" class="scroll-page">WORK</a> | <a href="#about" title="About" class="scroll-page">ABOUT</a> | <a href="#contact" title="Contact" class="scroll-page">CONTACT</a> </div>
                </div>
            </div>
        </footer>
        <!--END: Footer--> 

        <!-- Scripts --> 
        <script src="js/jQuery/jquery.js"></script> 
        <script src="js/bootstrap.min.js"></script> 
        <script src="js/custom.js"></script>
    </body>
</html>