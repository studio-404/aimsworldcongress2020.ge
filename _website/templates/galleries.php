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

            <div class="col-md-9">
                <div class="row">
                    
                    <div id="Grid">
<?php 
	$i=0;
	foreach($children as $item) { 
		$link = (($item['redirectlink'] == '') || ($item['redirectlink'] == 'NULL')) ? href($item['id']) : $item['redirectlink'];
		$i++;
?>
                    <div class="col-md-4 mix students" data-cat="3">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <a href="<?php echo $link; ?>">
                                    <img src="<?php echo $item['imagen'];?>" alt="<?php echo $item['title']; ?>" />
                                </a>
                            </div>
                            <div class="gallery-content">
                                <h4 class="gallery-title"><a href="<?php echo $link; ?>"><?php echo $item['title']; ?></a></h4>
                            </div>
                        </div> <!-- /.gallery-item -->
                    </div> <!-- /.col-md-4 -->
<?php } ?>                    
                    </div> <!-- /#Grid -->

                </div> <!-- /.row -->

            </div> <!-- /.col-md-9 -->

        </div> <!-- /.row -->
        
    </div> <!-- /.container -->