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

            <!-- Here begin Main Content -->
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="event-container clearfix">
                            <div class="">
                                <h2 class="event-title"><?php echo $product['title'];?></h2> 
                                <span class="event-time" style="color:#333333;"><?php echo convert_date($product['productdate']) ?></span>

                                <p><?php echo $product['content'];?></p>
                                <div class="widget-inner">
                                
                                    <dl class="course-list" role="tablist">
                                                <dt>
                                                    <i class="fa fa-caret-right ui-icon"></i>
                                                    <a href="<?php echo $product['photo1'];?>" target="_blank"><?php echo l('attached');?></a>
                                                </dt>
                                    </dl>
    
                                </div>                                 
                                
                                <!-- AddThis Button BEGIN -->
                                <div class="addthis_toolbox addthis_default_style ">
                                <a class="addthis_button_preferred_1"></a>
                                <a class="addthis_button_preferred_2"></a>
                                <a class="addthis_button_preferred_3"></a>
                                <a class="addthis_button_preferred_4"></a>
                                <a class="addthis_button_compact"></a>
                                <a class="addthis_counter addthis_bubble_style"></a>
                                </div>
                                <script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50c787cc73c5f266"></script>
                                <!-- AddThis Button END -->

                            </div> <!-- /.right-event-content -->
                            
                        </div> <!-- /.event-container -->
                        
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->