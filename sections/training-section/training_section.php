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
        <div data-content-url="./sections/training-section/01-web_application/web_application-main.php"></div> 
        <div data-content-url="./sections/training-section/02-mobile_application/mobile_application-main.php"></div> 
        <div data-content-url="./sections/training-section/03-gis_application/gis_application-main.php"></div> 
        <div data-content-url="./sections/training-section/04-others/others-main.php"></div> 
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
        size: "large",
        responsive: true,
        delayAjax:500,
        autoContentHeight: true,
        urlBased: true,                               
        manualTabId: true,
        defaultTab: "web_application",
        //event: 'mouseover',
        animation: {
            effects: "slideH",
            easing: "easeInOutCirc",
            type: "jquery"
        }
    });

});
</script>

    </body>
</html>
