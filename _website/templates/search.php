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
                            <div class="blog-post-inner">
                                <h3 class="blog-post-title"><?php echo $title;?></h3>
                                
                                <p>
<?php if($m3char == 1) { ?>
<div class="alert alert-info">
	<strong><?php echo l('search.simbol');?></strong>
</div>
<?php } elseif($noresult == 1) { ?>
<div class="alert alert-danger">
	<strong><?php echo l('search.not_found');?></strong>
</div>
<?php } else { ?>
<ul class="archive-list">
<?php foreach ($results as $r):?>
<li><a href="<?php echo href($r['id']);?>"><?php echo $r['title']?></a></li>            
<?php endforeach; ?>
</ul>
<?php } ?>
                                </p>
                            
                            </div>
                                
                            
                        </div> <!-- /.blog-post-container -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
                
            </div> <!-- /.col-md-8 -->

            <!-- Here begin Sidebar -->
            <div class="col-md-4">

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title"><?php echo l('video');?></h4>
                    </div>
                    <div class="widget-inner">
                        <div class="gallery-small-thumbs clearfix">
						<iframe width="340" height="200" src="https://www.youtube.com/embed/<?php echo s('video.id');?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                        </div> <!-- /.galler-small-thumbs -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
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