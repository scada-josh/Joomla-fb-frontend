<div id="01-web_application-nav">
	<ul>
		<li data-link="html_css"><a>HTML & CSS</a></li>
		<li data-link="javascript"><a>JavaScript</a></li>
		<li data-link="jquery"><a>jQuery</a></li>
		<li data-link="angularjs"><a>AngularJS</a></li>
		<li data-link="nodejs"><a>NodeJS</a></li>
		<li data-link="php_mysql"><a>PHP & MySQL</a></li>
	</ul>
	<div>
		<div data-content-url="./sections/training-section/01-web_application/01-01-html_css/html_css-main.php"></div> 
		<div data-content-url="./sections/training-section/01-web_application/01-02-javascript/javascript-main.php"></div> 
		<div>jquery</div>
		<div>angularjs</div>
		<div>nodejs</div>
		<div>php_mysql</div>
	</div>
</div>

<script type="text/javascript">
/* jQuery activation and setting options for child tabs within docs tab*/
$("#01-web_application-nav").zozoTabs({
	position: "top-left",
	theme: "red",
	style:"underlined",
	rounded: false,
	shadows: false,                
        //defaultTab: "tab1",
        urlBased: true,                               
        manualTabId: true,
        defaultTab: "html_css",
        cacheAjax: false,  
        animation: {                   
        	easing: "easeInOutCirc",
        	effects: "slideV"
        },
        size: "medium",
        select: function(e, item){
        },
        deactivate: function(e, item){
        }
    });
</script>