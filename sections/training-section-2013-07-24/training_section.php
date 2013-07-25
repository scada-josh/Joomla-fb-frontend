<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

<section id="Training">
 <article class="page">
<div class="row">
<div class="span12">
<h2 class="page-title">Training <a class="to-top scroll-page" href="#home" title="To Top"><i class="icon-chevron-up"></i></a></h2>
</div>

<div class="span12">
<div id="training-center">
    <ul>
        <li data-link="web_application"><a>Web Application<span class="hidden-phone hidden-tablet">การพัฒนาเว็ปแอปพลิเคชั่น</span></a></li>
        <li data-link="mobile_application"><a> <m class="hidden-phone hidden-tablet">MOBILE APPLICATION</m><span class="visible-phone visible-tablet">MOBILE APPLICATION</span><span class="hidden-phone hidden-tablet">การพัฒนาแอปพลิเคชั่นบนมือถือ</span></a></li>
        <li data-link="gis_application"><a>GIS Application<span class="hidden-phone hidden-tablet">การพัฒนาระบบสารสนเทศทางภูมิศาสตร์ </span></a></li>
        <li data-link="others"><a>Others <span class="hidden-phone hidden-tablet">อื่นๆ</span></a></li>
    </ul>
    <div>
        <div>
            <div class="well">
            <h4>Overview</h4>
            <p><small>ในส่วนนี้จะมาเรียนรู้เกี่ยวกับการพัฒนาเว็ปแอปพลิเคชั่นกันนะครับ</small></p>
            <blockquote class="pull-right"><p><small><strong>THE JOSH</strong><span class="hidden-phone">, Web Master | Code-Aholic, Thailand </span></small> </p></blockquote>
            <br/>
            </div>

            <div id="sub-topic-nav">
                <ul>
                    <li data-link="html_css"><a>HTML & CSS</a></li>
                    <li data-link="javascript"><a>JavaScript</a></li>
                    <li data-link="jquery"><a>jQuery</a></li>
                    <li data-link="angularjs"><a>AngularJS</a></li>
                    <li data-link="nodejs"><a>NodeJS</a></li>
                    <li data-link="php_mysql"><a>PHP & MySQL</a></li>
                </ul>
                <div>
                    <div>
                        <!-- HTML & CSS -->
                        <h4>HTML & CSS</h4>
                        <div id="content-aholic"> 
                            <?php include './sections/training-section/01-01-HTML_CSS/html_css_main.php'; ?>
                        </div>
                    </div>
                    <div>
                        <!-- JavaScript -->
                        <h4>JavaScript</h4>
                        <div> 
                        </div>
                    </div>
                    <div>3</div>
                    <div>4</div>
                    <div>5</div>
                    <div>6</div>
                </div>
            </div>

        </div>
        <div><h4>Coming soon...</h4></div>
        <div><h4>Coming soon...</h4></div>
        <div><h4>Coming soon...</h4></div>


    </div>
</div>
</div>

</div>
</article>
</section>



<script type="text/javascript"> 
$(function () {


    /* jQuery activation and setting options for parent tabs*/
    $("#training-center").zozoTabs({
        position: "top-compact",
        rounded: true,
        multiline:true,
        //maxRows: 5,
        theme: "white",
        //defaultTab: "tab2",
        size: "large",
        responsive: true,
        autoContentHeight: true,
        //Deep Linking
        urlBased: true,                               
        manualTabId: true,
        defaultTab: "web_application",
        event: 'mouseover',
        animation: {
            effects: "slideH",
            easing: "easeInOutCirc",
            type: "jquery"
        }
    });

    /* jQuery activation and setting options for child tabs within docs tab*/
    $("#sub-topic-nav").zozoTabs({
        position: "top-left",
        theme: "red",
        style:"underlined",
        rounded: false,
        shadows: false,                
        //defaultTab: "tab1",
        urlBased: true,                               
        manualTabId: true,
        defaultTab: "html_css",
        animation: {                   
            easing: "easeInOutCirc",
            effects: "slideV"
        },
        size: "medium"
    });

    /* jQuery activation and setting options for second tabs, enabling multiline*/
    $("#content-aholic").zozoTabs({
        position: "top-left",
        theme: "white",
        //multiline: true,
        style: "clean",
        rounded: false,
        shadows: true,
        bordered: true,
        minWindowWidth: 480,
        //defaultTab: "tab1",
        orientation: "vertical",
        size: "small",
        delayAjax:500,
        urlBased: true,                               
        manualTabId: true,
        defaultTab: "html_css-02",
        animation: {
            easing: "easeInOutExpo",
            duration: 1000,
            effects: "slideV"
        }
    });  


});
</script>

    </body>
</html>
