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
                    
                    <div id="Grid">
<?php
$idx = 0;
$num = count($photos);
$idx = 0;
foreach ($photos AS $item):
	if($idx == 0) $idx = 1; else $idx = 0;
    $link = $item['file'];
?>
                    <div class="col-md-4 mix students" data-cat="3">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <a class="fancybox" data-fancybox-group="gallery1" href="<?php echo $item['file']; ?>">
                                    <img src="<?php echo $item['file'];?>" alt="<?php echo $item['title']; ?>" />
                                </a>
                            </div>
                        </div> <!-- /.gallery-item -->
                    </div> <!-- /.col-md-4 -->
<?php
endforeach;
?>                   
                    </div> <!-- /#Grid -->

                </div> <!-- /.row -->

            </div> <!-- /.col-md-9 -->

        </div> <!-- /.row -->
        
    </div> <!-- /.container -->