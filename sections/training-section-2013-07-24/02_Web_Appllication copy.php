<?php $conn = OpenDbConnection(); ?>

<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar collapsed" data-toggle="collapse" data-target="#web-nav-collapse">
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
            </a>
            <a href="#home" class="brand"><img id="myLogo" src="img/web-icon.png" alt="your slogan here"></a>
            <div class="nav-collapse collapse" id="web-nav-collapse">
                <!--                <ul class="nav pull-right">-->
                <ul class="nav" id="web-menu">
                    <li class="active dropdown" data-toggle="pill" id="training-02-01">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">HTML <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
                                //
                                $sql = "SELECT * FROM `training-main-menu` WHERE category_id = 'training-02-01' ORDER BY main_menu_id ASC";
                                
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

                    <li class="dropdown" data-toggle="pill" id="training-02-02">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">CSS <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
                                //
                                $sql = "SELECT * FROM `training-main-menu` WHERE category_id = 'training-02-02' ORDER BY main_menu_id ASC";
                                
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
                    <li class="dropdown" data-toggle="pill" id="training-02-03">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">JavaScript <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
                                //
                                $sql = "SELECT * FROM `training-main-menu` WHERE category_id = 'training-02-03' ORDER BY main_menu_id ASC LIMIT 0, 1";
                                
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

                                
                                

                            ?>

                            <li class='divider'></li>
                            <li class='nav-header'>JavaScript Framework</li>

                            <?php
                                //
                                $sql = "SELECT * FROM `training-main-menu` WHERE category_id = 'training-02-03' ORDER BY main_menu_id ASC LIMIT 1, 2";
                                
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

                            ?>

                        </ul>
                    </li>
                    
                    <li class="divider-vertical"></li>
                    <li class="dropdown" data-toggle="pill" id="training-02-04">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Server Side Script <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
                                //
                                $sql = "SELECT * FROM `training-main-menu` WHERE category_id = 'training-02-04' ORDER BY main_menu_id ASC";
                                
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
                    <li class="dropdown" data-toggle="pill" id="training-02-05">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Database <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
                                //
                                $sql = "SELECT * FROM `training-main-menu` WHERE category_id = 'training-02-05' ORDER BY main_menu_id ASC";
                                
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

                </ul>
                <ul class="nav pull-right">
                    <!-- <li class="divider-vertical"></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">HELP <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Installation</a></li>
                            <li><a href="#">Manual</a></li>
                            <li><a href="#">Download</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Others</a></li>
                        </ul>
                    </li> -->
                    <li class="divider-vertical"></li>
                    <li class="pull-right"><a href="#" ><img style="height: 50px;margin-top: -16px"  src="img/code-aholic_logo.png" alt="ข้อมูลสมาชิก"></a></li>
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
            <h4 id="web-category_header"></h4>
            <p><small id="web-category_description"></small></p>
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
                    <h4 id="web-showVideoTagName-Area">...</h4>
                    <div id="web-showVideo-Area">
                        <img src="img/800x600.gif" alt="">
                    </div>
                    <br/>
                </div>
            </div>
        </div><!-- .thumbnail -->
    </li><!-- .span6 -->
</ul>

<?php CloseDbConnection($conn); ?>



<script type="text/javascript" src="js/jQuery/jquery.js"></script> 
<script type="text/javascript">

    $(function(){

        //alert('2');
        
        updateTopicDescription('web','training-02-01');
        
        $('#web-menu > li[data-toggle="pill"]').click(function(e){
            $(this).siblings('li').removeClass("active");
            $(this).addClass('active');
            updateTopicDescription('web',this.id);
        });
        
        
         $('#web-menu > li[data-toggle="pill"] > ul > li > ul > li').click(function(e){
            //event.preventDefault();
            //$(this).parents('li[data-toggle="pill"]').addClass('active');
            showVideo('web',this.id);
            //$(this).addClass('active');
            //$(this).parents('li[data-toggle="pill"]').addClass('active');
            //console.log($(this).parents('li[data-toggle="pill"]'));
         });
           
        

    });

</script>




