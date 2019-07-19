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
            <div <?php if($newslistid!=10 and $newslistid!=42){?>class="col-md-8"<?php } ?>>
                <div class="row">
                    <div class="col-md-12">
                        <div class="event-container clearfix">
                        <?php if (content($imagen)!='') {?>	
                            <div class="left-event-content">
                            <a class="fancybox" data-fancybox-group="<?php echo $id;?>" href="<?php echo content($imagen); ?>" title="<?php echo $title;?>">
                                <img src="<?php echo content($imagen);?>" alt="<?php echo $title;?>" width="225">
                            </a>
                            </div> <!-- /.left-event-content -->
						<?php } ?> 
                            <div class="right-event-content">
                                <h2 class="event-title"><?php echo $title;?></h2> 
                                <?php if($newslistid!=10 and $newslistid!=42){?>
                                <span class="event-time" style="color:#333333;"><?php echo convert_date($date) ?></span>
                                <?php }?>
                                <p><?php echo content($content); ?></p>
                                <?php if($newslistid!=10 and $newslistid!=42){?>
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
                                <?php } ?>
                                                            
                                <div class="widget-inner">
                                
                                    <dl class="course-list" role="tablist">
                                            <?php foreach($files as $file) : ?>        
                                            <?php $ext = strtolower(substr(strrchr($file['path'], '.'), 1)); ?>
                                                <dt>
                                                    <i class="fa fa-caret-right ui-icon"></i>
                                                    <a href="<?php echo $file['path'];?>" target="_blank"><?php echo $file['title'];?></a>
                                                </dt>
                                        <?php endforeach; ?>
                                    </dl>
    
                                </div> 
                                
                            </div> <!-- /.right-event-content -->
                        </div> <!-- /.event-container -->
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->
			<?php if($newslistid!=10 and $newslistid!=42){?>
            <!-- Here begin Sidebar -->
            <div class="col-md-4">
				<?php if(count($images)>0) : ?> 
                <div class="widget-main">
                    <div class="widget-main-title">
                        <a href="<?php echo href('37');?>"><h4 class="widget-title"><?php echo l('photo');?></h4></a>
                    </div>
                    <div class="widget-inner">
                        <div class="gallery-small-thumbs clearfix">

                                <?php foreach($images as $image) : ?>
                                <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="<?php echo $id;?>" href="<?php echo $image['path'];?>" title="<?php echo $image['title'];?>">
                                <img src="<?php echo 'crop.php?img=' . $image['path'] . '&width=70&height=70';?>" width="70" height="70" alt="<?php echo $image['title'];?>" title="<?php echo $image['title'];?>"/>
                                </a>
                                </div>
                                <?php endforeach; ?>
                                <!-- End Photogallery -->
                                
                        </div> <!-- /.galler-small-thumbs -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->
				<?php endif; ?>
                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title"><?php echo l('events');?></h4>
                    </div> <!-- /.widget-main-title -->
                    <div class="widget-inner">
                    	<?php echo events_right();?>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title"><?php echo l('news');?></h4>
                    </div> <!-- /.widget-main-title -->
                    <div class="widget-inner">
                    	<?php echo news_right();?>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->
            </div> <!-- /.col-md-4 -->
			<?php } ?>
        </div> <!-- /.row -->
    </div> <!-- /.container -->