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

            <!-- Here begin Main Content -->
            <div class="col-md-12">
                <div class="row">
                    <div id="Grid">

                        <?php
function categories()
{
    $sql = "SELECT * FROM ".c("table.catalogs")." WHERE language = '" . l() . "' AND visibility = 'true' and deleted=0;";
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
                    <div class="col-md-6 mix students" data-cat="3">
                        <div class="gallery-item">
                            <div class="gallery-content">
                                <h4 class="gallery-title"><a href="'.href($catpage["id"]).'/'.$home['id'].'">'.$home["title"].'</a></h4>
                            </div>
                        </div> <!-- /.gallery-item -->
                    </div> <!-- /.col-md-4 -->
				'."\n";

	}
    return $out;
}   
 
echo categories();   
               
						
						
						?>
                                       
                    </div> <!-- /#Grid -->
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->