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
function research()
{
    $sql = "SELECT * FROM ".c("table.catalogs")." WHERE language = '" . l() . "' AND visibility = 'true' and top25=1 and deleted=0;";
    $homepage = db_fetch_all($sql);
    if (empty($homepage))
        return NULL;
    $out = NULL;
	$i=0;
    foreach ($homepage AS $home) {
		$cat=db_fetch("select * from menus where language='".l()."' and id=".$home["catalogid"]);
		$catpage=db_fetch("select * from pages where language='".l()."' and attached='".$cat["title"]."'");
        $i++;
		$date = new DateTime($home["productdate"]);
		$out .= '
                        <div class="list-event-item">
                            <div class="box-content-inner clearfix">
                                <div class="list-event-header">
                                    <span class="event-date small-text"><i class="fa fa-calendar-o"></i>'.$date->format('Y-m-d').'</span>
                                    <div class="view-details"><a href="'.href($catpage["id"]).'/'.$home['id'].'" class="lightBtn">'.l('more').'</a></div>
                                </div>
                                <h5 class="event-title"><a href="'.href($catpage["id"]).'/'.$home['id'].'">'.$home["title"].'</a></h5>
                                <p>'.$home["description"].'</p>
                            </div> <!-- /.box-content-inner -->
                        </div> <!-- /.list-event-item -->
				'."\n";
	}
    return $out;
}     
echo research();                   
?>                           
					</div>

                </div> <!-- /.row -->

            </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->
        
    </div> <!-- /.container -->