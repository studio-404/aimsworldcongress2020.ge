<?php
defined('DIR') OR exit;

$num = count($news);
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
<?php if($id==435){?>
                    <div id="Grid">
<?php 
	$i = 0;
	foreach ($news AS $item):
		$i++;
		$link = href($item['id']);
		$date = date_create($item['pagedate']);
?>
                    <div class="col-md-6 mix students" data-cat="3">
                        <div class="gallery-item">
                            <div class="gallery-content">
                                <h4 class="gallery-title"><a href="<?php echo $link; ?>"><?php echo $item['title']; ?></a></h4>
                            </div>
                        </div> <!-- /.gallery-item -->
                    </div> <!-- /.col-md-4 -->
<?php endforeach; ?>                     
                    
                    </div> <!-- /#Grid -->
<?php }else{?>
            <!-- Here begin Main Content -->

            <div class="col-md-8">
                <div class="row">

                    <div class="col-md-12">
<?php 
	$i = 0;
	foreach ($news AS $item):
		$i++;
		$link = href($item['id']);
		$date = date_create($item['pagedate']);
?>
                        <div class="list-event-item">
                            <div class="box-content-inner clearfix">
                           		<?php if ($item['imagen']!='') {?>
                                <div class="list-event-thumb">
                                    <a href="<?php echo $link;?>">
                                        <img src="<?php echo $item['imagen'];?>" alt="<?php echo $item['title'];?>">
                                    </a>
                                </div>
                                <?php } ?> 
                                <div class="list-event-header">
                                    <span class="event-date small-text"><i class="fa fa-calendar-o"></i><?php echo convert_date($item['pagedate']) ?></span>
                                    <div class="view-details"><a href="<?php echo $link;?>" class="lightBtn"><?php echo l('more');?></a></div>
                                </div>
                                <h5 class="event-title"><a href="<?php echo $link;?>"><?php echo $item['title'];?></a></h5>
                                <p><?php echo $item['description'];?></p>
                            </div> <!-- /.box-content-inner -->
                        </div> <!-- /.list-event-item -->
<?php endforeach; ?>                     
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
            </div> <!-- /.col-md-4 --> 
<?php } ?>
        </div> <!-- /.row -->
        
        
<?php if (count($news) > 0) : ?> 

	<?php
	 if(count($news) > 0) { 
	?>

<div class="row">
    <div class="col-md-12">
        <div class="prev-next-post clearfix">
		<?php
            }
        //  echo $count_sql;
        // Pager Start
            if (isset($item_count) AND $item_count > $num):
                if ($page_num > 1):
        ?>
        	<span class="whiteBtn"><a class="prev" href="<?php echo href($section["id"], array()) . '?page=1'; ?>">&lt;&lt;</a></span>
        	<span class="whiteBtn"><a class="prev" href="<?php echo href($section["id"], array()) . '?page=' . ($page_num - 1); ?>">&lt;</a></span>
        <?php
                endif;
                $per_side = c('news.page_count');
                $index_start = ($page_num - $per_side) <= 0 ? 1 : $page_num - $per_side;
                $index_finish = ($page_num + $per_side) >= $page_max ? $page_max : $page_num + $per_side;
                if (($page_num - $per_side) > 1)
                    echo '<li>...</li>';
                for ($idx = $index_start; $idx <= $index_finish; $idx++):
        ?>
        	<span class="whiteBtn"><a <?php echo ($page_num==$idx) ? 'class="active prev"':'class="prev"' ;?> href="<?php echo href($section["id"], array()) . '?page=' . $idx; ?>"><?php echo $idx ?></a></span>
        <?php
                endfor;
                if (($page_num + $per_side) < $page_max)
                    echo '<li>...</li>';
                if ($page_num < $index_finish):
        ?>
        	<span class="whiteBtn"><a class="prev" href="<?php echo href($section["id"], array()) . '?page=' . ($page_num + 1); ?>">&gt;</a></span>
            <span class="whiteBtn"><a class="prev" href="<?php echo href($section["id"], array()) . '?page=' . $page_max; ?>">&gt;&gt;</a></span>
        <?php
                endif;
            endif;
        // Pager End
        ?>
        </div>
    </div>
</div>
<!-- #pager .fix -->
<?php endif; ?>
                    
    </div> <!-- /.container -->