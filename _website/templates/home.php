<?php defined('DIR') OR exit; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-slideshow">
                    <div class="flexslider">
                        <ul class="slides">
                            <?php echo getMainSlideImages();?>
                        </ul> <!-- /.slides -->
                    </div> <!-- /.flexslider -->
                </div> <!-- /.main-slideshow -->
            </div> <!-- /.col-md-12 -->
        </div>
    </div>


    <div class="container">
        <div class="row">

            <!-- Here begin Main Content -->
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-item">
                            <?php echo welcome_home();?>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

                <div class="row">

                    <!-- Show Latest Blog News -->
                    <div class="col-md-6">
                        <div class="widget-main">
                            <div class="widget-main-title">
                                <a href="<?php echo href('8');?>"><h4 class="widget-title"><?php echo l('media');?></h4></a>
                            </div> <!-- /.widget-main-title -->
                            <div class="widget-inner">
                                <?php echo media();?>
                            </div> <!-- /.widget-inner -->
                        </div> <!-- /.widget-main -->
                    </div> <!-- /col-md-6 -->

                    <div class="col-md-6">
                        <div class="widget-main">
                            <div class="widget-main-title">
                                <h4 class="widget-title">About Batumi - The Pearl of the Black Sea</h4>
                            </div> <!-- /.widget-main-title -->
                            <div class="widget-inner">
                                <div class="blog-list-post clearfix">
                                    <div class="blog-list-thumb">
                                        <iframe width="515" height="315" src="https://www.youtube.com/embed/<?php echo s('video.id');?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div> <!-- /.blog-list-post -->
                            </div> <!-- /.widget-inner -->
                        </div> <!-- /.widget-main -->
                    </div> <!-- /col-md-6 -->

                </div> <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-main">
                            <div class="widget-main-title">
                                <h4 class="widget-title">Our Partners</h4>
                            </div> <!-- /.widget-main-title -->
                            <div class="widget-inner">
                                <div class="our-campus clearfix">
                                    <ul>
                                        <?php echo partners_home();?>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- /.widget-main -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->
        </div>
    </div>