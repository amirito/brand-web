<?php require_once('core/core.php'); ?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Brands</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/slider.css">
    <link rel="stylesheet" type="text/css" href="css/style6.css">
</head>
<body>
<header>
    <h1><a href="?Page=home">Brands Store</a></h1>
</header>
<section class="color-4">
    <nav class="cl-effect-2" dir="rtl">
        <a href="?page=home"><span data-hover="صفحه اصلی">صفحه اصلی</span></a>
        <a href="#"><span data-hover="برندها">برندها</span></a>
        <a href="#"><span data-hover="تخفیف ها">تخفیف ها</span></a>
        <a href="#"><span data-hover="درباره ما">درباره ما</span></a>
        <a href="#"><span data-hover="ارتباط با ما">ارتباط با ما</span></a>
    </nav>
</section>
<!-- slider -->
<?php
	if(!isset($_GET['page']) || (isset($_GET['page']) &&  $_GET['page'] == 'home') ){
		echo '
<section>
    <div id="pxs_container" class="pxs_container">
        <div class="pxs_bg">
            <div class="pxs_bg1"></div>
            <div class="pxs_bg2"></div>
            <div class="pxs_bg3"></div>
        </div>
        <div class="pxs_loading">Loading images...</div>
        <div class="pxs_slider_wrapper">
            <ul class="pxs_slider">
                <li><img src="images/1.jpg" alt="First Image" /></li>
                <li><img src="images/2.jpg" alt="Second Image" /></li>
                <li><img src="images/3.jpg" alt="Third Image" /></li>
                <li><img src="images/4.jpg" alt="Forth Image" /></li>
                <li><img src="images/5.jpg" alt="Fifth Image" /></li>
                <li><img src="images/6.jpg" alt="Sixth Image" /></li>
            </ul>
            <div class="pxs_navigation">
                <span class="pxs_next"></span>
                <span class="pxs_prev"></span>
            </div>
            <ul class="pxs_thumbnails">
                <li><img src="images/thumbs/1.jpg" alt="First Image" /></li>
                <li><img src="images/thumbs/2.jpg" alt="Second Image" /></li>
                <li><img src="images/thumbs/3.jpg" alt="Third Image" /></li>
                <li><img src="images/thumbs/4.jpg" alt="Forth Image" /></li>
                <li><img src="images/thumbs/5.jpg" alt="Fifth Image" /></li>
                <li><img src="images/thumbs/6.jpg" alt="Sixth Image" /></li>
            </ul>
        </div>
    </div>
</section>
			';
	}
	?>
<!-- /slider -->
<div class="clearfix"></div>

<section class="main ">
    <div class="col-md-3 pull-right main-menu">
        <div class="box">
            <div class=" header-box"><h4>دسته بندی</h4></div>
            <ul class="list-unstyled">
                <li><a href="#">ورزشی</a></li>
                <li><a href="#">مجلسی</a></li>
                <li><a href="#">مردانه</a></li>
                <li><a href="#">زنانه</a></li>
                <li><a href="#">بچگانه</a></li>
            </ul>

        </div>
        <div class="box">
            <div class=" header-box"><h4>برندها</h4></div>
            <ul class="list-unstyled">
                <li><a href="#"><img src="images/1.jpg" width="32" height="32">آدیداس</a></li>
                <li><a href="#"><img src="images/2.jpg" width="32" height="32">نایک</a></li>
                <li><a href="#"><img src="images/3.jpg" width="32" height="32">بنتون</a></li>
                <li><a href="#"><img src="images/4.jpg" width="32" height="32">تامی</a></li>
                <li><a href="#"><img src="images/5.jpg" width="32" height="32">پولو</a></li>
                <li><a href="#"><img src="images/6.jpg" width="32" height="32">لاکوسته</a></li>
            </ul>
            <h4>Brands</h4>
        </div>

    </div>
    <div class="col-md-9 main-menu">
		<?php
            if(isset($_GET['page'])){
					if(is_file('include/'.$_GET['page'].'.php')){
						include 'include/'.$_GET['page'].'.php';
						}else{
						die('صفحه مورد نظر وجود ندارد');
						}
					}else{
						include 'include/home.php';
						}
         
        ?>
        
        <div class="clearfix"></div>

    </div>

</section>

<div class="clearfix"></div>

<section class="parallax">

</section>

<div class="clearfix"></div>
<section class="top-footer">
    <ul class="list-unstyled list-inline text-center">
        <li><a href="#" class="social facebook"></a></li>
        <li><a href="#" class="social twitter"></a></li>
        <li><a href="#" class="social instagram"></a></li>
    </ul>
</section>
<footer>
    <div dir="rtl">
        <h4>لینک های مرتبط</h4>
        <ul class="list-unstyled">
            <li><a href="#">صفحه اصلی</a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
        </ul>
    </div>

</footer>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript">
    $(function() {
        var $pxs_container	= $('#pxs_container');
        $pxs_container.parallaxSlider();
    });
</script>

</body>
</html>