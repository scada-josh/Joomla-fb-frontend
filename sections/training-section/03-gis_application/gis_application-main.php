<div id="03-gis_application-nav">
	<ul>
		<li data-link="gis_application_01"><a>gis_application_01</a></li>
		<li data-link="gis_application_02"><a>gis_application_02</a></li>
	</ul>
	<div>
		<div>gis_application_01</div>
		<div>gis_application_02</div>
	</div>
</div>

<script type="text/javascript">
/* jQuery activation and setting options for child tabs within docs tab*/
$("#03-gis_application-nav").zozoTabs({
	position: "top-left",
	theme: "red",
	style:"underlined",
	rounded: false,
	shadows: false,                
        //defaultTab: "tab1",
        urlBased: true,                               
        manualTabId: true,
        defaultTab: "gis_application_01",
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