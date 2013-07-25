
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
                                        echo "<li id='".$row['main_menu_id']."'>";
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
                                        echo "<li id='".$row['main_menu_id']."'>";
                                        if ($row['show_icon']) {
                                            echo "<a href='#'' >".$row['main_menu_name']."&nbsp;&nbsp;&nbsp;<img src='./sections/training-section/images/".$row['show_icon'].".gif' alt=''>&nbsp;</a>";
                                        }else{
                                            echo "<a href='#'' >".$row['main_menu_name']."&nbsp;&nbsp;&nbsp;</a>";
                                        }
                                        echo "</li>";
                                        echo "<li class='nav-header'>JavaScript Framework</li>";
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

<!-- ################################################ -->

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
        </div>
    </div>

</div>
        </div>
        <div class="row-fluid">
            <div class="span4" >
                <!-- <h4 >รายการวิดีโอ : </h4> -->
                <div class="nav-collapse collapse" id="mobile-nav-collapse2">
                <ul class="nav nav-tabs nav-stacked" id="container_video_list">
                  <!-- <li class="nav-header">รายการวิดีโอ :</li> -->
                  <?php for ($i=1; $i < 20; $i++) { ?>
                      <li class="media" >
                        <a href="#">
                            <span><i class="icon-play"></i><?php echo $i; ?></span>
                            <img data-src="holder.js/140x140" class="img-polaroid" alt="140x140" style="width: 40px; height: 40px; " src="img/video_icon_default.png">
                            Media heading
                        </a>
                        
                  </li>
                  <?php }  ?>

              </ul>
              </div>
            </div>
            <div class="span8">
                <h4 id="mobile-showVideoTagName-Area"></h4>
                <div id="mobile-showVideo-Area">
                    <img src="img/video player icon_small.jpg" alt="">
                </div>
                <br/>
            </div>
        </div>
    </div>
    </div>
</div>

<?php CloseDbConnection($conn); ?>

<script type="text/javascript" src="js/jQuery/jquery.js"></script> 
<script type="text/javascript">
    

    $(function(){
        
        updateTopicDescription('mobile','training-01-01');

        $('#mobile-menu > li[data-toggle="pill"]').click(function(e){

            // if($(this).hasClass('active')){
            //     $(this).find('ul[class="dropdown-menu"]').hide();
            // }
            
            

            $(this).siblings('li').removeClass("active");
            $(this).addClass('active');
            updateTopicDescription('mobile',this.id);

            // console.log($(this).hasClass('active'));
            // console.log($(this));

            $(this).siblings('li').find('ul[class="dropdown-menu"]').hide();
            $(this).find('ul[class="dropdown-menu"]').fadeIn(500);
        });
        
        //$('#mobile-menu > li[data-toggle="pill"]').click(function(e){
        //     e.preventDefault();
        //     console.log($(this).hasClass('active'));

        //     if($(this).hasClass('active')){
        //         //$(this).siblings('li').removeClass("active");
        //         //$(this).addClass('active');

        //         updateTopicDescription('mobile',this.id);
        //     }else{
                
        //         updateTopicDescription('mobile',this.id);
        //     }

        //     $(this).addClass('active active');

        //     console.log($(this));
            
        // });
        
        
         $('#mobile-menu > li[data-toggle="pill"] > ul > li').click(function(e){
            
            //console.log($(this).parents('li[data-toggle="pill"]'));
            //console.log($(this).parents('li[data-toggle="pill"]').siblings('li'));
            //console.log($(this).parents('li').toggleClass("active"));
            //console.log($(this).parents('li').siblings('li').removeClass("active"));
            //console.log($(this).parents('li').attr("class"));

            //console.log($(this).parents('ul[class="dropdown-menu"]').fadeOut(500));
            //console.log($(this).parents('li[class="dropdown"]').removeClass("open"));

            alert(this.id);
            $('#mobile-category_description').html(this.id);
            //console.log($(this));
            $(this).parents('ul[class="dropdown-menu"]').fadeOut(500);
            

            //var xxx = 'active dropdown';

            //console.log($(this).parents('li').attr("class", xxx));

            //console.log($(this).parents('li'));
            //$(this).parents('li[data-toggle="pill"]').siblings('li').removeClass("active");
            //$(this).css('class','active dropdown');

            //showVideo('mobile',this.id);
            e.preventDefault();
            e.stopPropagation();
            
         });
            
         $(document).click(function(){
            $('#mobile-menu').find('ul[class="dropdown-menu"]').hide();
         });


         $("#container_video_list").css('height',570);
           
        

    });

</script>



