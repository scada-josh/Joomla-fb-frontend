
<?php //include '../../../utility/connect-db/connection.php'  ?>
<?php include '../utility/connect-db/connection.php' ?>

<?php $conn = OpenDbConnection(); ?>

<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar collapsed" data-toggle="collapse" data-target="#mobile-nav-collapse">
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
            </a>
            <a href="#" class="brand"><img src="img/mobile-blue.png" alt="Mobile Application"></a>
            <div class="nav-collapse collapse" id="mobile-nav-collapse">
                <ul class="nav" id="mobile-menu">
                    <li class="active" data-toggle="pill" id="training-01-01">
                        <a href="#">Objective C</a>
                    </li>

                    <li class="divider-vertical"></li>


                    <li class="" data-toggle="pill" id="training-01-02">
                        <a href="#">iPhone Application</a>
                    </li>
                </ul>
                <ul class="nav pull-right hidden-phone">
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
                            <a class="btn btn-navbar collapsed" data-toggle="collapse" data-target="#mobile-videoList-collapse">
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                            </a>
                            <a href="#" class="brand"><img src="img/video.png" style="width: 48px; height: 48px; "alt="Mobile Application"></a>
                            <ul class="nav" >
                                <li >
                                    <a href="" onclick="return false;" id="mobile-showVideoTagName-Area"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row-fluid">
                <div class="span4" >
                    <div class="nav-collapse collapse" id="mobile-videoList-collapse">
                        <ul class="nav nav-tabs nav-stacked" id="mobile_container_video_list">


                        </ul>
                    </div>
                </div>
                <div class="span8">
                    <div id="mobile-showVideo-Area">
                        <img src="img/video_player_icon_small.jpg" alt="">
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
        updateVideoList('mobile_container_video_list','training-01-01');
        
        $('#mobile-menu > li[data-toggle="pill"]').click(function(e){
            e.preventDefault();
            e.stopPropagation();

            $(this).siblings('li').removeClass("active");
            $(this).addClass('active');
            updateTopicDescription('mobile',this.id);
            updateVideoList('mobile_container_video_list',this.id);
        });

        $("#mobile_container_video_list .media").live("click", function(e) { 

            showVideo('mobile',this.id);

            $(this).parents('ul').find('.displayNumber').show();
            $(this).find('.displayNumber').hide();

            $(this).parents('ul').find('.displayIconPlay').hide();
            $(this).find('.displayIconPlay').show();

            e.preventDefault();
            e.stopPropagation();

        })


        $("#mobile_container_video_list").css('height',570);


    });

</script>



