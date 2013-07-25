
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

                                        $sql_sub_menu = "SELECT * FROM `training-sub-menu` WHERE main_menu_id = '".$row['main_menu_id']."'";
                                        $result_sub_menu = mysql_query($sql_sub_menu);
                                        if (mysql_num_rows($result_sub_menu)) {
                                            echo "<ul class='dropdown-menu'>";
                                            while ($row_sub_menu = mysql_fetch_array($result_sub_menu)) {
                                                if ($row_sub_menu['show_icon']) {
                                                    echo "<li id='".$row_sub_menu['sub_menu_id']."'><a tabindex='-1' href='#'' >".$row_sub_menu['sub_menu_name']."&nbsp;&nbsp;&nbsp;<img src='./sections/training-section/images/".$row_sub_menu['show_icon'].".gif' alt=''>&nbsp;</a></li>";
                                                }else{
                                                    echo "<li id='".$row_sub_menu['sub_menu_id']."'><a tabindex='-1' href='#'' >".$row_sub_menu['sub_menu_name']."&nbsp;&nbsp;&nbsp;</a></li>";
                                                }
                                            }
                                            echo "</ul>";
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

                                        $sql_sub_menu = "SELECT * FROM `training-sub-menu` WHERE main_menu_id = '".$row['main_menu_id']."'";
                                        $result_sub_menu = mysql_query($sql_sub_menu);
                                        if (mysql_num_rows($result_sub_menu)) {
                                            echo "<ul class='dropdown-menu'>";
                                            while ($row_sub_menu = mysql_fetch_array($result_sub_menu)) {
                                                if ($row_sub_menu['show_icon']) {
                                                    echo "<li id='".$row_sub_menu['sub_menu_id']."'><a tabindex='-1' href='#'' >".$row_sub_menu['sub_menu_name']."&nbsp;&nbsp;&nbsp;<img src='./sections/training-section/images/".$row_sub_menu['show_icon'].".gif' alt=''>&nbsp;</a></li>";
                                                }else{
                                                    echo "<li id='".$row_sub_menu['sub_menu_id']."'><a tabindex='-1' href='#'' >".$row_sub_menu['sub_menu_name']."&nbsp;&nbsp;&nbsp;</a></li>";
                                                }
                                            }
                                            echo "</ul>";
                                        }
                                        echo "</li>";
                                    }
                                }

                                //echo "<li class='divider'></li>";
                                //echo "<li class='nav-header'>Work Shop</li>";

                            ?>
                        </ul>
                    </li>
                </ul>
                <ul class="nav pull-right">
                <!-- <li class="divider-vertical"></li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">HELP <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" onclick="alert('55')">Installation</a></li>
                            <li><a href="#">Manual</a></li>
                            <li><a href="#">Download</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Others</a></li>
                        </ul>
                    </li> -->
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



<ul class="thumbnails">
    <li class="span12">
        <div class="thumbnail">
            <div class="row">
                
                <div class="span8 offset2">
                    <h4 id="mobile-showVideoTagName-Area">...</h4>
                    <div id="mobile-showVideo-Area">
                        <img src="img/800x600.gif" alt="">
                    </div>
                    <br/>
                </div>
            </div>
        </div><!-- .thumbnail -->
    </li><!-- .span6 -->
</ul>

<?php CloseDbConnection($conn); ?>




<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar collapsed" data-toggle="collapse" id="mobile-menu-phone-collapse" data-target="#mobile-nav-collapse2">
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
            </a>
            <a href="#" class="brand"><img id="mobileLogo" src="img/mobile-blue.png" alt="Mobile Application"></a>
            <div class="nav-collapse collapse" id="mobile-nav-collapse">
                <!-- <ul class="nav" id="mobile-menu">
                    <li class="active dropdown" data-toggle="pill" id="training-01-01">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Objective C <b class="caret"></b></a>
                    </li>

                    <li class="divider-vertical"></li>

                    
                </ul> -->
            </div>
            <!-- /.nav-collapse --> 

        </div>
        <!-- /.container --> 
    </div>
    <!-- /.navbar-inner --> 

</div>
<!-- /.navbar --> 

<div class="thumbnails">
    <div class="span12">
    
    <div class="thumbnail">
        <div class="row-fluid">
            <div class="span4" >
                <h4 >Video List</h4>
                <!-- <a class="btn btn-navbar collapsed" data-toggle="collapse" id="mobile-menu-phone-collapse" data-target="#container_video_list">
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                </a> -->
                <div class="nav-collapse collapse" id="mobile-nav-collapse2">
                <ul class="nav nav-tabs nav-stacked" id="container_video_list">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Messages</a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Messages</a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Messages</a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Messages</a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Messages</a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Messages</a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Messages</a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Messages</a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Messages</a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Messages</a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Messages</a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Messages</a></li>
              </ul>
              </div>
            </div>
            <div class="span8">
                <h4 id="mobile-showVideoTagName-Area">...</h4>
                <div id="mobile-showVideo-Area">
                    <img src="img/800x600.gif" alt="">
                </div>
                <br/>
            </div>
        </div>
    </div>
    </div>
</div>






<ul class="thumbnails">
    
    <li class="span12">
        <div class="thumbnail">
            <div class="row-fluid">
                <div class="span4">
                    <a class="btn btn-navbar collapsed" data-toggle="collapse" id="mobile-menu-phone-collapse" data-target="#mobile-nav-collapse2">
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
    </a>
            <ul class="media-list" id="mobile-nav-collapse2">
            <li class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Media heading</h4>
                  <p>Cras sit amet nibh libero</p>
                </div>
            </li>
            <li class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Media heading</h4>
                  <p>Cras sit amet nibh libero</p>
                </div>
            </li>
            <li class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Media heading</h4>
                  <p>Cras sit amet nibh libero</p>
                </div>
            </li>
            <li class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Media heading</h4>
                  <p>Cras sit amet nibh libero</p>
                </div>
            </li>
            <li class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Media heading</h4>
                  <p>Cras sit amet nibh libero</p>
                </div>
            </li>
            <li class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Media heading</h4>
                  <p>Cras sit amet nibh libero</p>
                </div>
            </li>
            <li class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Media heading</h4>
                  <p>Cras sit amet nibh libero</p>
                </div>
            </li>
            <li class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Media heading</h4>
                  <p>Cras sit amet nibh libero</p>
                </div>
            </li>
            <li class="media">
                <a class="pull-right" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                    Cras sit amet nibh libero, .
                </div>
            </li>
        </ul>
                </div>
                <div class="span8">
                    <h4 id="mobile-showVideoTagName-Area">...</h4>
                    <div id="mobile-showVideo-Area">
                        <img src="img/800x600.gif" alt="">
                    </div>
                    <br/>
                </div>
            </div>
        </div><!-- .thumbnail -->
    </li><!-- .span6 -->
</ul>





<div class="row"  id="cvl2">
    <div class="span4" id="cvl">

        <!-- <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
            </a>
            <div class="media-body">
                <h4 class="media-heading">Media heading</h4>
                felis in faucibus.
            </div>
        </div>

        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
            </a>
            <div class="media-body">
                <h4 class="media-heading">Media heading</h4>
                felis in faucibus.
            </div>
        </div> -->




        <!-- <div class="media">
          <a class="pull-left" href="#">
            <img class="media-object" data-src="holder.js/64x64">
        </a>
        <div class="media-body">
            <h4 class="media-heading">Media heading</h4>
            ...
            <div class="media">
              ...
          </div>
      </div>
  </div> -->

        <!-- <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
            </a>
            <div class="media-body">
                <h4 class="media-heading">Media heading</h4>
                 felis in faucibus.
            </div>
        </div> -->

        <ul class="media-list" >
            <li class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Media heading</h4>
                  <p>Cras sit amet nibh libero</p>
                </div>
            </li>
            <li class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Media heading</h4>
                  <p>Cras sit amet nibh libero</p>
                </div>
            </li>
            <li class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Media heading</h4>
                  <p>Cras sit amet nibh libero</p>
                </div>
            </li>
            <li class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Media heading</h4>
                  <p>Cras sit amet nibh libero</p>
                </div>
            </li>
            <li class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Media heading</h4>
                  <p>Cras sit amet nibh libero</p>
                </div>
            </li>
            <li class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Media heading</h4>
                  <p>Cras sit amet nibh libero</p>
                </div>
            </li>
            <li class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Media heading</h4>
                  <p>Cras sit amet nibh libero</p>
                </div>
            </li>
            <li class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Media heading</h4>
                  <p>Cras sit amet nibh libero</p>
                </div>
            </li>
            <li class="media">
                <a class="pull-right" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACv0lEQVR4Ae1a2WoqQRAtV+IW0OAuyYPGBXzy/7/ABxEUFfc8JNFAEnDHNfcUjFyDobnt9SEz1Q8z012T012nzqkJJLaPj48DWXjYLZw7py4EiAIszoBYwOICIFGAKMDiDIgFLC4AaYJiAbGAxRkQC1hcAPIVEAuIBSzOgFjA4gKQr4BYwOoWcF5CwGw2o263S/P5nO7u7ujh4YE8Hs8JZL1e5/jj4yOFQqGT2LnJNTDP7WOsaVtgt9tRpVKhxWJB0WiURqMRtdttA5fvb29vvD6dTmm73Z7Ezk2ugXlun7/XtBXw54+qtF6vqVgscmXj8TjPD4cD2Ww2QjIgBOuvr6/HPZ+fn+nl5YWSySQlEglqNBpMInBAlA7mEVzjQVsBn5+fvB2IKJfL1O/3Wf5IHuPp6Ylubm4oHA7z3LhEIhFaLpfU6XQICgEZPp+P39XFNLB17toEGJJGAk6nk8bjMbVaLT7DarWi4XBI8P334XK5KJvN0mazoVqtRm63+/ieLub3Pf5lrk0ADo5RKBSoVCoRKvv+/s6JDQYD8nq9/DyZTPg9Q96YxGIxrjrsgsYJAjEuwWQAjYs2Abe3t7wdEsVA90dC8D58jG5erVZZCYiDFJCAAanjy4GBnrDf7/n5EkwG0LhoN0HjsL1ej5sZLBAIBNjLUEUul+PjQBXNZpOVEgwGmSA0PlQ9lUoxQSAnnU6TLqZG3scf0SYADQ5eNpqZw+GgfD7PwIaUMYHnjbvdbuffG9AEM5kM3d/fc+9Av8Cn1O/3a2HyBpoX26X/IwTJIyFYACT8j3ENzJ/OdTEBPwH/lnXtJvhbElSdUwhQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblJwpQMWT2uCjA7BVW5ScKUDFk9rgowOwVVuUnClAxZPa4KMDsFVblZ3kFfAGvb5MKWHSY9AAAAABJRU5ErkJggg==">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                    Cras sit amet nibh libero, .
                </div>
            </li>
        </ul>

    </div>
    <div class="span8" >
        <h4 id="mobile-showVideoTagName-Area"></h4>
        <div id="mobile-showVideo-Area">
            <img src="img/800x600.gif" alt="">
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

         $("#container_video_list").css('height',600);
           
        

    });

</script>



