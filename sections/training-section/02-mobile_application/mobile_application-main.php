<div id="02-mobile_application-nav">
	<ul>
		<li data-link="mobile_application_01"><a>mobile_application_01</a></li>
		<li data-link="mobile_application_02"><a>mobile_application_02</a></li>
	</ul>
	<div>
		<div>mobile_application_01</div>
		<div>mobile_application_02</div>
	</div>
</div>

<script type="text/javascript">
/* jQuery activation and setting options for child tabs within docs tab*/
$("#02-mobile_application-nav").zozoTabs({
	position: "top-left",
	theme: "red",
	style:"underlined",
	rounded: false,
	shadows: false,                
        //defaultTab: "tab1",
        urlBased: true,                               
        manualTabId: true,
        defaultTab: "mobile_application_01",
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