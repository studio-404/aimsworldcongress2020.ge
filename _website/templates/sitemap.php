<?php defined('DIR') || exit;
function treeview ($parid=0, $lang, $link = null, $pl = null) {	// Tree View for Sitemap
	$qry = "SELECT " . c("table.pages") . ".id as dd," . c("table.pages") . ".* FROM " . c("table.pages") . "," . c("table.menus") . " WHERE " . c("table.pages") . ".menuid=" . c("table.menus") . ".id AND " . c("table.pages") . ".language='".$lang."' AND " . c("table.menus") . ".language='".$lang."' AND " . c("table.menus") . ".type='pages' AND " . c("table.pages") . ".visibility='true' AND " . c("table.pages") . ".menuid=1 AND " . c("table.pages") . ".deleted='0' AND " . c("table.pages") . ".masterid='".$parid."' order by position";
	$result = mysql_query($qry) or die (mysql_error());
	if (mysql_num_rows($result)>0) { 
		while($row = mysql_fetch_array($result)) {
			$level = $row["level"];
			$pad = ($level - 1) * 30;
?>
        <li style="margin-left:<?php echo $pad;?>px;"> 
            <a href="<?php echo href($row["dd"]);?>"><?php echo $row["title"];?></a>
        </li>					
<?php 
			treeview ($row["idx"], $lang);
		}
	}
}
?>
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
                                <ul>
								<?php
	                                treeview (0, l());
                                ?>
                                </ul>
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