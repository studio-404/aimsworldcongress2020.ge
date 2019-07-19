<?php defined('DIR') OR exit; ?>
    <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                   <?php echo location();?>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="col-md-5">
                <div class="contact-map">
                    <div class="google-map-canvas" id="map-canvas" style="height: 542px;">
                    <iframe src="<?php echo s('map');?>" height="542" frameborder="0" style="width:100%;"></iframe>
                    </div>
                </div>
            </div> <!-- /.col-md-5 -->
            
            <div class="col-md-7">
                <div class="contact-page-content">
                    <div class="contact-heading">
                        <h3><?php echo $title;?></h3>
                        <p><?php echo content($content); ?></p>
                    </div>
                </div>
            </div> <!-- /.col-md-7 -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->