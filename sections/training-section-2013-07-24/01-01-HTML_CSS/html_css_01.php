

<h1><span class="hidden-phone">Creating </span>Line charts</h1>
<small>Workshop นี้เราจะมาสร้าง Line charts <code>type: line</code> กันนะครับ</small>

<!-- <div class="navbar">
  <div class="navbar-inner">
    <form class="navbar-form pull-right">
      <button type="button" class="btn">Demo</button>
      <button type="button" class="btn">Training</button>
  </form>
</div>
</div> -->


<div class="tabbed-nav-01">
    <ul>
        <li><a>DEMO<span class="hidden-phone">ดูตัวอย่างผลลัพธ์</span></a></li>
        <li><a>TRAINING<span class="hidden-phone">ดูวิดีโอสอนใช้งาน</span></a></li>
    </ul>
    <div>
        <div></div>
        <div>555</div>
    </div>
</div>



<!-- <p>Add classes to an <code>&lt;img&gt;</code> element to easily style images in any project.</p> -->
<div class="bs-docs-example bs-docs-example-images">
<!-- <img data-src="holder.js/140x140" class="img-polaroid">
<img data-src="holder.js/140x140" class="img-circle"> -->


<a class="single_image" href="./sections/training-section/HTML_CSS/images/charts01_b.png">
  <!-- <img src="image_small.jpg" alt=""/> -->
  <img src="./sections/training-section/HTML_CSS/images/charts01_b.png" style="position: relative; top: auto; left: auto; right: auto; margin: 0 auto 20px; z-index: 1; max-width: 100%;" class="img-rounded ">
</a>

</div>


<pre class="prettyprint linenums hidden-phone">
chart = new Highcharts.Chart({
              chart: {
                renderTo: 'chartContainer',
                //showAxes: true
                borderWidth:1,
                type: 'spline',
                zoomType: 'xy'
              }
              ...
          });
</pre>

<pre class="prettyprint linenums hidden-phone">
&lt;img src="..." class="img-rounded"&gt;
&lt;img src="..." class="img-circle"&gt;
&lt;img src="..." class="img-polaroid"&gt;
</pre>
<p><span class="label label-info">Heads up!</span> <code>.img-rounded</code> and <code>.img-circle</code> do not work in IE7-8 due to lack of <code>border-radius</code> support.</p>
<small>Aenean mattis commodo vehicula. Curabitur eget tellus quis ipsum placerat viverra viverra at turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vestibulum leo vel arcu egestas ac vestibulum tortor molestie. Sed posuere ligula a enim tempus ac pellentesque dolor dictum. Morbi gravida ipsum ac sem aliquam id laoreet enim condimentum. Morbi non justo quis eros faucibus suscipit. Pellentesque aliquam congue sem, sit amet blandit odio eleifend a.
Quisque at quam at magna malesuada ultricies. Quisque tempus tellus quis augue accumsan malesuada. Suspendisse eu euismod lorem. Phasellus at mollis leo. Morbi sit amet urna mi, eu feugiat metus. Morbi quis felis eu massa dignissim faucibus eu a augue. Vestibulum porta convallis arcu vitae lacinia. In aliquam consectetur venenatis. Proin lacus magna, bibendum et consectetur vel, pretium sit amet turpis. Pellentesque porttitor libero eu mauris iaculis eu feugiat leo facilisis. Aliquam lorem magna, ultrices sit amet vestibulum ut, venenatis eu risus. Mauris neque nibh, egestas a tristique feugiat, laoreet sit amet ante. Sed ultricies rhoncus tortor pretium tincidunt. Integer orci arcu, feugiat sed gravida sit amet, auctor tincidunt elit.</small>
<hr/>

<script type="text/javascript">
  $(function(){

    //alert();

    window.prettyPrint && prettyPrint();

    /* This will create single image */
    $("a.single_image").fancybox();

    /* This will create two galleries */
    $("a.grouped_elements").fancybox();
  

    function onSelect(e, item) {
      //alert('555');
      $.zozo.core.console.log("Selected: " + item.tab.text());
      $(document).attr('title', item.tab.text());
    }

    /*The item object holds tab element, content element and index of tabs*/
    function onDeactivate(e, item) {
      //alert('666');
      $.zozo.core.console.log("Deactivated: " + item.tab.text());
    } 

/* jQuery activation and setting options for first tabs, enabling multiline*/
    $(".tabbed-nav-01").zozoTabs({
        position: "top-compact",
        multiline:true,
        autoContentHeight:true,
        theme: "deepblue",
        style:"clean",
        rounded: false,
        shadows: false,
        bordered: false,
        maxRows: 2,
        responsive: false,
        minWindowWidth: 480,
        orientation: "horizontal",
        size: "medium",    
        defaultTab:"",                          
        animation: {
            easing: "easeInOutExpo",
            duration: 600,
            effects: "slideH"
        },
        select: onSelect,
        deactivate: onDeactivate
    });

  });
</script>
                            