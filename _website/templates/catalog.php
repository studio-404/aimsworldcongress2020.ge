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

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="load-more-btn">
                            <a href="javascript:;"><?php echo $title;?></a>
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->            
                <div class="row">
					<div class="col-md-12">
<?php 
$x = 0;
$class = NULL;
$num = count($items);
foreach($items as $item): 
?>
<?php
$x++;
$date = new DateTime($item["productdate"]);
?>
                        <div class="list-event-item">
                            <div class="box-content-inner clearfix">
                                <div class="list-event-header">
                                    <span class="event-date small-text"><i class="fa fa-calendar-o"></i><?php echo $date->format('Y-m-d'); ?></span>
                                    <div class="view-details"><a href="<?php echo href(($id), array(), l(), $item['id']);?>" class="lightBtn"><?php echo l('more'); ?></a></div>
                                </div>
                                <h5 class="event-title"><a href="<?php echo href(($id), array(), l(), $item['id']);?>"><?php echo $item["title"]; ?></a></h5>
                                <p><?php echo $item["description"]; ?></p>
                            </div> <!-- /.box-content-inner -->
                        </div> <!-- /.list-event-item -->
<?php endforeach; ?>                              
					</div>

                </div> <!-- /.row -->

            </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->
        
    </div> <!-- /.container -->