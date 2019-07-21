<?php defined('DIR') OR exit; ?>
<?php
	$url="";
	$urlparts=array();
	foreach($_GET as $k=>$v) {
        if($k!='product')
		  $urlparts[]=$k."=".$v;
	}
	if(count($urlparts)>0)
		$url='?'.implode("&",$urlparts);
    $product=NULL;
    if(isset($_GET["product"])) 
        $product=$_GET["product"];

	$photo = "";
	$desc = "";
	$producttitle = "";
	$prod = 0;
	if(isset($_GET["product"])) {
		$prod = $_GET["product"];
		$cat = db_fetch("select * from catalogs where id = '".$_GET["product"]."' and language = '".l()."'");
		$photo = $cat["photo1"];
		$producttitle = $cat["title"];
		$desc = $cat["description"];
		if($desc=="") $desc = $producttitle;
	}
	if($photo=="") $photo = href().WEBSITE."/images/logo.png";
	$pageid = href($storage->section['id']).(($prod>0) ? "?product=".$_GET["product"]:"");

?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <base href="<?php echo href(); ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="google-site-verification" content="" />
<?php
?>
    <meta name="keywords" content="<?php echo s('keywords') .', ' . $storage->section["meta_keys"]; ?>" />
    <meta name="description" content="<?php echo s('description') . ', ' . $storage->section["meta_desc"]; ?>" />
    <meta name="robots" content="Index, Follow" />
<?php
	$pagetitle = $storage->section['title'];
	if(isset($_GET["product"])) {
		$prod = db_fetch("select * from catalogs where language='".l()."' and id=".db_escape($_GET["product"]));
		$pagetitle = $prod["title"];
	}
?>
	<title><?php echo s('sitetitle').' - '.$storage->section['title']; ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo JAVASCRIPT;?>/tinymce/jscripts/tiny_mce/themes/advanced/skins/default/custom.css">

	<link rel="image_src" type="image/gif" href="<?php echo WEBSITE;?>/images/logo.png" />
	<link rel="stylesheet" type="text/css" href="<?php echo JAVASCRIPT;?>/prettyphoto/css/prettyPhoto.css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />

    <meta property="og:image" content="<?php echo ($storage->section["imagen"]!="") ? $storage->section["imagen"] : $photo;?>" />
    <meta property="og:title" content="<?php echo $producttitle;?>" />
    <meta property="og:description" content="<?php echo mb_substr(strip_tags($storage->section['content']),0,800,'UTF-8'); ?>"/>
    <meta property="og:url" content="<?php echo href($storage->section['id']).(($prod>0) ? "?product=".$_GET["product"]:"");?>" />
    <meta property="og:site_name" content="<?php echo s('sitetitle').' - '.$pagetitle; ?>" />
    <meta property="og:type" content="website" />

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800' rel='stylesheet' type='text/css'>
        
    <!-- CSS Bootstrap & Custom -->
    <link href="<?php echo WEBSITE;?>/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php echo WEBSITE;?>/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo WEBSITE;?>/css/animate.css?time=<?=time()?>" rel="stylesheet" media="screen">
    
    <link href="<?php echo WEBSITE;?>/style.css?time=<?=time()?>" rel="stylesheet" media="screen">
        
    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo WEBSITE;?>/images/favicon.ico?time=<?=time()?>">
    <!-- JavaScripts -->
    <script src="<?php echo WEBSITE;?>/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo WEBSITE;?>/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo WEBSITE;?>/js/modernizr.js"></script>
    <!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
    <![endif]-->
    
</head>

<body>

    <!-- This one in here is responsive menu for tablet and mobiles -->
    <div class="responsive-navigation visible-sm visible-xs">
        <a href="#" class="menu-toggle-btn">
            <i class="fa fa-bars"></i>
        </a>
        <div class="responsive_menu">
            <ul class="main_menu">
                <?php echo mobile_menu();?>
            </ul> <!-- /.main_menu -->
            <ul class="social_icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul> <!-- /.social_icons -->
        </div> <!-- /.responsive_menu -->
    </div> <!-- /responsive_navigation -->


    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 header-left">
                    <p><i class="fa fa-envelope"></i>info@aimsworldcongress2020.ge</p>
                </div> <!-- /.header-left -->

                <div class="col-md-4">
                    <div class="logo">
                        <a href="<?php echo href('1');?>" title="Congress" rel="home">
                            <img src="<?php echo WEBSITE;?>/images/logo.png" alt="<?php echo s('sitetitle'); ?>">
                        </a>
                    </div> <!-- /.logo -->
                </div> <!-- /.col-md-4 -->

                <div class="col-md-4 header-right">
                    <p>18-25 April. 2020 | Batumi. Georgia</p>
                </div> <!-- /.header-right -->
            </div>
        </div> <!-- /.container -->

        <div class="nav-bar-main" role="navigation">
            <div class="container">
                <nav class="main-navigation clearfix visible-md visible-lg" role="navigation">
                        <ul class="main-menu sf-menu">
                        	<?php echo main_menu();?>
                        </ul> <!-- /.main-menu -->

                        <ul class="social-icons pull-right">
                       <?php if(s('facebook')!=''){?>

                            <li><a href="<?php echo s('facebook');?>" data-toggle="tooltip" title="Facebook"  target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <?php } ?>
                        <?php if(s('youtube')!=''){ ?>
                            <li><a href="<?php echo s('youtube');?>" data-toggle="tooltip" title="youtube"  target="_blank"><i class="fa fa-youtube"></i></a></li>
                        <?php } ?>
                        </ul> <!-- /.social-icons -->
                </nav> <!-- /.main-navigation -->
            </div> <!-- /.container -->
        </div> <!-- /.nav-bar-main -->

    </header> <!-- /.site-header -->

    <?php echo html_decode($storage->content); ?>

    <!-- begin The Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-widget">
                        <?php echo about_home();?>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget">
                    <?php if(l()=='en'){
						echo custom_menu(5115);
						}else if(l()=='ge'){
							echo custom_menu(5115);
							}else{
								echo custom_menu(5115);
								}
					?>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget">
                    <?php if(l()=='en'){
						echo custom_menu(5118);
						}else if(l()=='ge'){
							echo custom_menu(5118);
							}else{
								echo custom_menu(5118);
								}
					?>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget">
                        <?php if(l()=='en'){
    						echo custom_menu_blank(5148);
    						}else if(l()=='ge'){
    							echo custom_menu_blank(5118);
    							}else{
    								echo custom_menu_blank(5118);
    								}
    					?>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget">
                        <ul class="footer-media-icons">
                       <?php if(s('facebook')!=''){?>
                            <li><a href="<?php echo s('facebook');?>" class="fa fa-facebook" target="_blank"></a></li>
                        <?php } ?>
                        <?php if(s('youtube')!=''){ ?>
                            <li><a href="<?php echo s('youtube');?>" class="fa fa-youtube" target="_blank"></a></li>
                        <?php } ?>
                        </ul>
                    </div>
                </div>
            </div> <!-- /.row -->

            <div class="bottom-footer">
                <div class="row">
                    <div class="col-md-5">
                        <p class="small-text">&copy; AIMS World Congress 2020 by <a href="#">shindi</a></p>
                    </div> <!-- /.col-md-5 -->
                    <div class="col-md-7">
                        <ul class="footer-nav">
                        <?php if(l()=='en'){
    						echo custom_menu(5166);
    						}else if(l()=='ge'){
    							echo custom_menu(5118);
    							}else{
    								echo custom_menu(5118);
    								}
    					?>
                        </ul>
                    </div> <!-- /.col-md-7 -->
                </div> <!-- /.row -->
            </div> <!-- /.bottom-footer -->

        </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->

    <script src="<?php echo WEBSITE;?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo WEBSITE;?>/js/plugins.js"></script>
    <script src="<?php echo WEBSITE;?>/js/custom.js"></script>
    <script src="<?php echo WEBSITE;?>/js/gscript.js"></script>

</body>
</html>
