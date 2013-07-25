

<h1><span class="hidden-phone">Creating </span>Areaspline charts</h1>
<small>Workshop นี้เราจะมาสร้าง Areaspline charts <code>type: line</code> กันนะครับ</small>

<div class="tabbed-nav-01">
    <ul>
        <li><a>DEMO<span class="hidden-phone">ดูตัวอย่างผลลัพธ์</span></a></li>
        <li><a>VDO<span class="hidden-phone">ดูวิดีโอสอนใช้งาน</span></a></li>
    </ul>
    <div>
        <div>
          <blockquote>
            <p><a class="visible-phone" href="http://code-aholic.com/Highcharts-Training/src/03-Area%20charts/">Demo for Phone</a></p>
          </blockquote>
          <blockquote>
            <p><a class="show-demo hidden-phone" data-fancybox-type="iframe" href="http://code-aholic.com/Highcharts-Training/src/03-Area%20charts/">Demo for Desktop & Tablet</a></p>
          </blockquote>
          
          
        </div>
        <div>
          
          <blockquote>
            <small><a class="show-video"  title="Title 03 : การใช้งาน Area Chart" href="http://www.youtube.com/v/Tzo7cpacpXE" >CREATING AREASPLINE CHARTS (EP.1 of 3)</a></small>
          </blockquote>
          <blockquote>
            <small><a class="show-video"  title="Title 03 : การใช้งาน Area Chart" href="http://www.youtube.com/v/Tzo7cpacpXE" >CREATING AREASPLINE CHARTS (EP.2 of 3)</a></small>
          </blockquote>
          <blockquote>
            <small><a class="show-video"  title="Title 03 : การใช้งาน Area Chart" href="http://www.youtube.com/v/Tzo7cpacpXE" >CREATING AREASPLINE CHARTS (EP.3 of 3)</a></small>
          </blockquote>
          
        </div>
    </div>
</div>

<div class="bs-docs-example bs-docs-example-images">

<!-- /* HTML */ -->
<a class="single_image" href="./sections/training-section/HTML_CSS/images/1.jpg">
  <!-- <img src="./sections/training-section/HTML_CSS/images/1.jpg" style="position: relative; top: auto; left: auto; right: auto; margin: 0 auto 20px; z-index: 1; max-width: 49.5%;" class="img-rounded "> -->
  <img src="./sections/training-section/HTML_CSS/images/1.jpg" style="width: 140px" class="img-rounded ">
</a>
<a class="grouped_elements" rel="group1-html_css_02" href="./sections/training-section/HTML_CSS/images/2.jpg">
  <!-- <img src="./sections/training-section/HTML_CSS/images/1.jpg" style="position: relative; top: auto; left: auto; right: auto; margin: 0 auto 20px; z-index: 1; max-width: 49.5%;" class="img-rounded "> -->
  <img src="./sections/training-section/HTML_CSS/images/2.jpg" style="width: 140px" class="img-rounded ">
</a>   
<a class="grouped_elements" rel="group1-html_css_02" href="./sections/training-section/HTML_CSS/images/3.jpg">
  <!-- <img src="./sections/training-section/HTML_CSS/images/1.jpg" style="position: relative; top: auto; left: auto; right: auto; margin: 0 auto 20px; z-index: 1; max-width: 49.5%;" class="img-rounded "> -->
  <img src="./sections/training-section/HTML_CSS/images/3.jpg" style="width: 140px" class="img-rounded ">
</a> 
<a class="grouped_elements" rel="group1-html_css_02" href="./sections/training-section/HTML_CSS/images/4.jpg">
  <!-- <img src="./sections/training-section/HTML_CSS/images/1.jpg" style="position: relative; top: auto; left: auto; right: auto; margin: 0 auto 20px; z-index: 1; max-width: 49.5%;" class="img-rounded "> -->
  <img src="./sections/training-section/HTML_CSS/images/4.jpg" style="width: 140px" class="img-rounded ">
</a> 

</div>

<h2>Stackable</h2>

<div class="bs-docs-example">
  555555
</div>


<table class="table table-bordered table-striped">
  <thead>
   <tr>
     <th style="width: 100px;"><small>Event</small></th>
     <th><small>Description - คำอธิบาย</small></th>
   </tr>
 </thead>
 <tbody>
   <tr>
     <td><small>slide</small></td>
     <td><small>This event fires immediately when the <code>slide</code> instance method is invoked.</small></td>
   </tr>
   <tr>
     <td><small>slid</small></td>
     <td><small>This event is fired when the carousel has completed its slide transition.</small></td>
   </tr>
 </tbody>
</table>

<pre class="prettyprint linenums hidden-phone">
$('.carousel').carousel()
</pre>

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

<small>โครงสร้างของเว็บที่เรากำลังจะทำ</small>

<pre class="prettyprint linenums hidden-phone">
<code>
    website/
    |-- index.html
    |-- css
    |   |-- zozo.tabs.min.css
    |-- img
    |   |-- z-tabs-icons.png (Mobile)
    |   |-- loading-image.gif (AJAX)
    |-- js
        |-- jquery.min.js
        |-- jquery.easing.min.js                            
        |-- zozo.tabs.min.js

</code>
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


    window.prettyPrint && prettyPrint();

              /* This will create single image */
              $("a.single_image").fancybox();

              /* This will create two galleries */
              $("a.grouped_elements").fancybox();

              /* This will show demo */
              $(".show-demo").fancybox({
                //maxWidth  : 900,
                //maxHeight : 600,
                //fitToView : false,
                width   : '100%',
                height    : '100%',
                autoSize  : false,
                closeClick  : false,
                openEffect  : 'none',
                closeEffect : 'none'
              });

              /* This will show video */
              $(".show-video").click(function() {
                //alert(this.href);
                //var temp = 'http://www.youtube.com/v/'+this.href+'?fs=1&amp;autoplay=1';

                $.fancybox({
                  'title'        : this.title,
                  'href'         : this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
                  'type'         : 'swf',
                  'swf'          : {
                   'wmode'            : 'transparent',
                   'allowfullscreen'  : 'true'
                 },
                 helpers : {
                  media: true,
                  title : { type : 'inside' }
                },
                youtube : {
                  autoplay: 1,
                  hd: 1,
                  vq: 'hd720'
                }
              });
                return false;
              });



    function onSelect(e, item) {
      $(this).defaultTab = "";

      //alert(item.tab.text()+ "is Selected!!");
      $.zozo.core.console.log("Selected: " + item.tab.text());
      $(document).attr('title', item.tab.text());
    }

    /*The item object holds tab element, content element and index of tabs*/
    function onDeactivate(e, item) {
      //alert(item.tab.text()+ "is Deactivated!!");
      $.zozo.core.console.log("Deactivated: " + item.tab.text());
    } 



/* jQuery activation and setting options for first tabs, enabling multiline*/
    $(".tabbed-nav-01").zozoTabs({
        position: "top-compact",
        multiline:true,
        autoContentHeight:true,
        theme: "blue",
        style:"clean",
        rounded: false,
        shadows: false,
        bordered: false,
        maxRows: 2,
        responsive: false,
        minWindowWidth: 480,
        orientation: "horizontal",
        size: "medium",
        // manualTabId: true,
        // urlBased:true,
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
                            