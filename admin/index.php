<?php require_once('../core/core.php'); ?>
<?php 
	if(!isset($_SESSION['admin'])){
		header('location: signin.php');
		
		}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ادمین</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" style="float:left !important">
          	<li><a href="logout.php">خروج</a></li>
            <li><a href="#">داشبورد</a></li>
            <li><a href="index.php">صفحه اصلی</a></li>
            
          </ul>
          <a class="navbar-brand" href="index.php" style="float:right; margin-left:20px;">Brands</a>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="جستجو...">
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
      <?php include('include/sidebar.php'); ?>
        <div class="col-sm-11 col-md-11 main">
          <!--<h4 class="page-header">لیست پیام های شما</h4>-->

          <!--<div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>-->

          <?php
		  	if(isset($_GET['page'])){
					if(is_file("include/$_GET[page].php")){
						include("include/$_GET[page].php");
					}else{
						echo 'صفحه مورد نظر وجود ندارد.';}
          			
			}else{
				include('include/home.php');
			}
		  ?>
          	
        </div>
      </div>
    </div>


<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
