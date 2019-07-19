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
                        <?php if($menuid==91){?>
<ul>                         
                        <?php
function categories($id)
{
    $sql = "SELECT * FROM ".c("table.catalogs")." WHERE language = '" . l() . "' AND visibility = 'true' and deleted=0 and FIND_IN_SET({$id}, Categories) order by productdate DESC;";
    $homepage = db_fetch_all($sql);
    if (empty($homepage))
        return NULL;
    $out = NULL;
	$i=0;
    foreach ($homepage AS $home) {
		$cat=db_fetch("select * from menus where language='".l()."' and id=".$home["catalogid"]);
		$catpage=db_fetch("select * from pages where language='".l()."' and attached='".$cat["title"]."'");
        $i++;
		$out .= '
				
					<li><a href="'.href($catpage["id"]).'/'.$home['id'].'" target="_blank">'.$home["title"].'</a></li>
				
				'."\n";

	}
    return $out;
}   
 
echo categories($id);   
               
						
						
						?>
</ul>                         
                        <?php }else{?>
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

                            </div> <!-- /.right-event-content -->
                        <?php } ?>
                        </div> <!-- /.event-container -->
                        
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->