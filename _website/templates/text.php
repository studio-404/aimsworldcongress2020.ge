<?php defined('DIR') OR exit ?>
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
            <div class="col-md-8">

                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-post-container">
                        	<?php if (content($imagen)!='') {?>
                            <div class="blog-post-image">
                                <img src="<?php echo (content($imagen)!='') ? 'crop.php?img=' . content($imagen) . '&width=750&height=390' : '';?>" alt="<?php echo $title;?>">
                            </div> <!-- /.blog-post-image -->
                            <?php } ?> 
                            <div class="blog-post-inner">
                                <h3 class="blog-post-title"><?php echo $title;?></h3>
                                <p><?php echo content($content); ?></p>
                            
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
                           
                            </div>
                                
                            
                        </div> <!-- /.blog-post-container -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
                
            </div> <!-- /.col-md-8 -->

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
                        <a href="<?php echo href('342');?>"><h4 class="widget-title"><?php echo l('video');?></h4></a>
                    </div>
                    <div class="widget-inner">
                        <div class="gallery-small-thumbs clearfix">
						<iframe width="340" height="200" src="https://www.youtube.com/embed/<?php echo s('video.id');?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                        </div> <!-- /.galler-small-thumbs -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main --> 

                <div class="widget-main" style="display: none;">
                    <div class="widget-main-title">
                        <a href="<?php echo href('42');?>"><h4 class="widget-title"><?php echo l('testimonials');?></h4></a>
                    </div>
                    <div class="widget-inner">
                        <div id="slider-testimonials">
                            <ul>
                            	<?php echo testimonial();?>
                            </ul>
                            <a class="prev fa fa-angle-left" href=""></a>
                            <a class="next fa fa-angle-right" href=""></a>
                        </div>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

            </div> <!-- /.col-md-4 -->
    
        </div> <!-- /.row -->
    </div> <!-- /.container -->