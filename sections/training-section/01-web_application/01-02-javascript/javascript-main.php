<div id="01-01-javascript-nav">
<ul>
	<li data-link="javascript-01"><a>เริ่มต้นใช้งาน JavaScript</a></li>
    <li data-link="javascript-02"><a>JavaScript OOP &nbsp;<img src="./sections/training-section/training-section-resources/images/new.gif"/></a></li>
</ul>
<div>

    <div data-content-url="./sections/training-section/01-web_application/01-02-javascript/01-02-javascript-contents/javascript-001.php"></div>
    <div data-content-url="./sections/training-section/01-web_application/01-02-javascript/01-02-javascript-contents/javascript-002.php"></div>

</div>
</div>

<script type="text/javascript">
/* jQuery activation and setting options for second tabs, enabling multiline*/
    $("#01-01-javascript-nav").zozoTabs({
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
        //delayAjax:500,
        urlBased: true,                               
        manualTabId: true,
        defaultTab: "javascript-01",
        cacheAjax: false,  
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