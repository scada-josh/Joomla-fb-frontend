
<?php //include '../../../utility/connect-db/connection.php' ?>
<?php include '../utility/connect-db/connection.php' ?>

<?php $conn = OpenDbConnection(); ?>

<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar collapsed" data-toggle="collapse" id="mobile-menu-phone-collapse" data-target="#mobile-nav-collapse">
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
            </a>
            <a href="#" class="brand"><img id="mobileLogo" src="img/mobile-blue.png" alt="Mobile Application"></a>
            <div class="nav-collapse collapse" id="mobile-nav-collapse">
                <ul class="nav" id="mobile-menu">
                    <li class="active dropdown" data-toggle="pill" id="training-01-01">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Objective C <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
                                //
                                $sql = "SELECT * FROM `training-main-menu` WHERE category_id = 'training-01-01' ORDER BY main_menu_id ASC";
                                
                                $result = mysql_query($sql);

                                if (mysql_num_rows($result)) {
                                    
                                    while ($row = mysql_fetch_array($result)) {
                                        echo "<li class='dropdown-submenu'>";
                                        if ($row['show_icon']) {
                                            echo "<a href='#'' >".$row['main_menu_name']."&nbsp;&nbsp;&nbsp;<img src='./sections/training-section/images/".$row['show_icon'].".gif' alt=''>&nbsp;</a>";
                                        }else{
                                            echo "<a href='#'' >".$row['main_menu_name']."&nbsp;&nbsp;&nbsp;</a>";
                                        }
                                        echo "</li>";
                                    }
                                }

                                //echo "<li class='divider'></li>";
                                //echo "<li class='nav-header'>Work Shop</li>";

                            ?>
                            
                        </ul>
                    </li>

                    <li class="divider-vertical"></li>

                    <li class="dropdown" data-toggle="pill" id="training-01-02">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">iPhone Application<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
                                //
                                $sql = "SELECT * FROM `training-main-menu` WHERE category_id = 'training-01-02' ORDER BY main_menu_id ASC";
                                
                                $result = mysql_query($sql);

                                if (mysql_num_rows($result)) {
                                    
                                    while ($row = mysql_fetch_array($result)) {
                                        echo "<li class='dropdown-submenu'>";
                                        if ($row['show_icon']) {
                                            echo "<a href='#'' >".$row['main_menu_name']."&nbsp;&nbsp;&nbsp;<img src='./sections/training-section/images/".$row['show_icon'].".gif' alt=''>&nbsp;</a>";
                                        }else{
                                            echo "<a href='#'' >".$row['main_menu_name']."&nbsp;&nbsp;&nbsp;</a>";
                                        }
                                        echo "</li>";
                                    }
                                }

                            ?>
                        </ul>
                    </li>
                </ul>
                <ul class="nav pull-right">
                    <li class="divider-vertical"></li>
                    <li class="pull-right">
                        <a href="#" ><img style="height: 50px;margin-top: -16px"  src="img/code-aholic_logo.png" alt="Mobile Application"></a>
                    </li>
                </ul>
            </div>
            <!-- /.nav-collapse --> 

        </div>
        <!-- /.container --> 
    </div>
    <!-- /.navbar-inner --> 

</div>
<!-- /.navbar --> 

<div class="row">
    <div class="span12">
        <div class="well">
            <h4 id="mobile-category_header"></h4>
            <p><small id="mobile-category_description"></small></p>
            </br>   
                <blockquote class="pull-right"><p><small><strong>THE JOSH</strong>, Web Master | Code-Aholic, Thailand </small> </p></blockquote>
            </br>
        </div>
    </div>
</div>


<?php CloseDbConnection($conn); ?>






<div class="thumbnails">
    <div class="span12">
    




    <div class="thumbnail">
        <div class="row-fluid">
<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar collapsed" data-toggle="collapse" id="mobile-menu-phone-collapse" data-target="#mobile-nav-collapse2">
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
            </a>
            <a href="#" class="brand"><img id="mobileLogo" src="img/video.png" style="width: 48px; height: 48px; "alt="Mobile Application"></a>
            <div class="nav-collapse collapse" id="mobile-nav-collapse">
            </div>
            <!-- /.nav-collapse --> 

        </div>
        <!-- /.container --> 
    </div>
    <!-- /.navbar-inner --> 

</div>
<!-- /.navbar --> 
        </div>
        <div class="row-fluid">
            <div class="span4" >
                <h4 >Video List</h4>
                <div class="nav-collapse collapse" id="mobile-nav-collapse2">
                <ul class="nav nav-tabs nav-stacked" id="container_video_list">
                  <!-- <li class="active"><a href="#">Home</a></li> -->
                  <!-- <li class="nav-header">List header</li> -->

                  <li class="media">
                        <a href="#">
                            1)
                            <img data-src="holder.js/140x140" class="img-polaroid" alt="140x140" style="width: 40px; height: 40px; " src="data:image/png;base64,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">
                            Media heading
                        </a>

                        <!-- <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">Media heading</h4>
                              <p>Cras sit amet nibh libero</p>
                          </div>
                      </li> -->
                  </li>
                  <li class="media disabled" >
                        <a href="#">
                            <i class="icon-play"></i>
                            <img data-src="holder.js/140x140" class="img-polaroid" alt="140x140" style="width: 40px; height: 40px; " src="img/user_profile01_32x32.png">
                            Media heading
                        </a>
                        
                  </li>

                  <?php for ($i=1; $i < 20; $i++) { ?>
                      <li class="media" >
                        <a href="#">
                            <?php echo $i; ?>
                            <img data-src="holder.js/140x140" class="img-polaroid" alt="140x140" style="width: 40px; height: 40px; " src="img/video_icon_default.png">
                            Media heading
                        </a>
                        
                  </li>
                  <?php }  ?>

              </ul>
              </div>
            </div>
            <div class="span8">
                <h4 id="mobile-showVideoTagName-Area">...</h4>
                <div id="mobile-showVideo-Area">
                    <img src="img/video player icon_small.jpg" alt="">
                </div>
                <br/>
            </div>
        </div>
    </div>
    </div>
</div>


<script type="text/javascript" src="js/jQuery/jquery.js"></script> 
<script type="text/javascript">
    

    $(function(){

        //alert('1');
        
        updateTopicDescription('mobile','training-01-01');
        
        $('#mobile-menu > li[data-toggle="pill"]').click(function(e){
            $(this).siblings('li').removeClass("active");
            $(this).addClass('active');
            updateTopicDescription('mobile',this.id);
        });
        
        
         $('#mobile-menu > li[data-toggle="pill"] > ul > li > ul > li').click(function(e){
            showVideo('mobile',this.id);
         });

         // var cvl2_height = parseInt($("#cvl2").css('height'));
         // console.log(cvl2_height);
         // $("#cvl").css('height',cvl2_height);

         $("#container_video_list").css('height',570);
           
        

    });

</script>



