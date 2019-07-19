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
                    foreach ($videos AS $item):
                        $link = href($item['id']);
                        $v = str_replace('https://www.youtube.com/watch?','',str_replace('https://youtu.be/','',$item['file']));
                    ?>
                    <div class="col-md-4 mix" data-cat="3">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <object width="100%" height="250">
                                    <param name="movie" value="https://www.youtube.com/v/<?php echo $v;?>?version=3&amp;hl=en_US"></param>
                                    <param name="allowFullScreen" value="true"></param>
                                    <param name="allowscriptaccess" value="always"></param>
                                    <param name="wmode" value="transparent"></param>
                                    <embed src="https://www.youtube.com/v/<?php echo $v;?>?version=3&amp;hl=en_US" type="application/x-shockwave-flash" width="100%" height="250" wmode="transparent" allowscriptaccess="always" allowfullscreen="true"></embed>
                                </object> 
                            </div>
                            <div class="gallery-content" style="height:100px;">
                                <h4 class="gallery-title"><a href="javascript:;"><?php echo $item['title']; ?></a></h4>
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