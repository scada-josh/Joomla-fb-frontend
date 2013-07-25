<div id="04-others-nav">
	<ul>
		<li data-link="others_01"><a>others_01</a></li>
		<li data-link="others_02"><a>others_02</a></li>
	</ul>
	<div>
		<div>others_01</div>
		<div>others_02</div>
	</div>
</div>

<script type="text/javascript">
/* jQuery activation and setting options for child tabs within docs tab*/
$("#04-others-nav").zozoTabs({
	position: "top-left",
	theme: "red",
	style:"underlined",
	rounded: false,
	shadows: false,                
        //defaultTab: "tab1",
        urlBased: true,                               
        manualTabId: true,
        defaultTab: "others_01",
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