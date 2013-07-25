<div id="01-01-html_css-nav">
<ul>
	<li data-link="html_css-01"><a>Getting Started &nbsp;<img src="./sections/training-section/training-section-resources/images/new.gif"/></a></li>
	<li data-link="html_css-02"><a>การสร้างตาราง HTML + การใช้งาน Filter5 5555 5555555555555555555555555555</a></li>
	<li data-link="html_css-03"><a>Table</a></li>
	<li data-link="html_css-04"><a>Table</a></li>
	<li data-link="html_css-05"><a>Table</a></li>
	<li data-link="html_css-06"><a>Table</a></li>
</ul>
<div>

    <div data-content-url="./sections/training-section/01-web_application/01-01-html_css/01-01-html_css-contents/html_css-001.php"></div> 
    <div data-content-url="./sections/training-section/01-web_application/01-01-html_css/01-01-html_css-contents/html_css-002.php"></div> 
	<div>1</div>
	<div>2</div>
	 
	<!--<div data-content-url="./sections/training-section/01-01-HTML_CSS/html_css_02.php"></div>  -->

</div>
</div>

<script type="text/javascript">
/* jQuery activation and setting options for second tabs, enabling multiline*/
    $("#01-01-html_css-nav").zozoTabs({
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
        //cacheAjax: false,  
        animation: {
            easing: "easeInOutExpo",
            duration: 1000,
            effects: "slideV"
        },
        select: function(e, item){
                window.prettyPrint && prettyPrint();
        },
        deactivate: function(e, item){
                //window.prettyPrint && prettyPrint();
        }
    });  
</script>