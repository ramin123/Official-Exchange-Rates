
<!DOCTYPE html>
<html lang="en" dir="ltr">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8">
<title> Официальные курсы валют </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<link rel="icon" href="<?=base_url()?>assets/img/logo.png" type="image/x-icon">
<meta content="" name="description">
<meta content="" name="author">
<link href="<?=base_url()?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>

<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->


<!-- BEGIN PAGE LEVEL STYLES -->
<!-- END PAGE LEVEL STYLES -->



<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->

<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="<?=base_url()?>assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?=base_url()?>assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?=base_url()?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>

<link href="<?=base_url()?>assets/admin/pages/css/portfolio.css" rel="stylesheet" type="text/css"/>

<link id="style_color" href="<?=base_url()?>assets/admin/layout/css/themes/light.css" rel="stylesheet" type="text/css">
<!-- <link href="<?=base_url()?>assets/admin/layout/css/themes/light2.css" rel="stylesheet" type="text/css" id="style_color"> -->


<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>

<body class="page-header-fixed page-quick-sidebar-over-content page-full-width">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			<img src="<?=base_url()?>assets/img/logo.png" style="width: 125px;margin-top: -0.4px" alt="logo" class="logo-default"/>
			</a>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN HORIZANTAL MENU -->
		<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
		<!-- DOC: This is desktop version of the horizontal menu. The mobile version is defined(duplicated) sidebar menu below. So the horizontal menu has 2 seperate versions -->
		<div class="hor-menu hidden-sm hidden-xs">
			<ul class="nav navbar-nav">
				<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->
				<li class="classic-menu-dropdown active">
					<a href="">
					home page <span class="selected">
					</span>
					</a>
				</li>
			</ul>
		</div>
		<!-- END HORIZANTAL MENU -->
		<!-- BEGIN HEADER SEARCH BOX -->
		<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
		<form class="search-form" action="" method="GET">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search..." name="query">
				<span class="input-group-btn">
				<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
				</span>
			</div>
		</form>
		<!-- END HEADER SEARCH BOX -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				
				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src="<?=base_url()?><?=$_SESSION['image']?>"/>
					<span class="username username-hide-on-mobile">
					<?=$_SESSION['name']?>  </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="<?=base_url()?>LogoutController/index">
							<i class="icon-key"></i> Выход </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				<!-- BEGIN QUICK SIDEBAR TOGGLER -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-quick-sidebar-toggler">
					<a href="<?=base_url()?>LogoutController/index" class="dropdown-toggle">
					<i class="icon-logout"></i>
					</a>
				</li>
				<!-- END QUICK SIDEBAR TOGGLER -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->






<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->

<script src="<?=base_url()?>assets/flash/jquery.js"></script>
<script>
  $(document).ready(function(){
 

 $('#alert').hide( 10000);
  
});
</script>
<?php if (isset($_GET['set'])) {?> 
    <div style=" z-index:2;position:fixed; left : 0;
  top: 40; background-image: url('<?=base_url()?>/assets/public/img/3.gif');margin-top: 50px;margin-left: 20px;font-size: 20px"  id="alert" class="btn red">
     Форма успешно зарегистрирована.
    
    </div>
<?php }elseif (isset($_GET['setEdit'])) {?>
    <div style=" z-index:2;position:fixed; left : 0;
  top: 40; background-image: url('<?=base_url()?>/assets/public/img/3.gif');margin-top: 50px;margin-left: 20px;font-size: 20px"  id="alert" class="btn purple">
     Отредактировано успешно.
    
    </div>
<?php }elseif (isset($_GET['remove'])) {?>
    <div style=" z-index:2;position:fixed; left : 0;
  top: 40; background-image: url('<?=base_url()?>/assets/public/img/3.gif');margin-top: 50px;margin-left: 20px;font-size: 20px"  id="alert" class="btn red">
    Удален успешно.
    </div>
<?php }elseif (isset($_GET['share'])) {?>
    <div style=" z-index:2;position:fixed; left : 0;
  top: 40; background-image: url('<?=base_url()?>/assets/public/img/3.gif');margin-top: 50px;margin-left: 20px;font-size: 20px"  id="alert" class="btn purple">
    Раздача прошла успешно.
    </div>
<?php }elseif (isset($_GET['notSet'])) {?>
    <div style=" z-index:2;position:fixed; left : 0;
  top: 40; background-image: url('<?=base_url()?>/assets/public/img/3.gif');margin-top: 50px;margin-left: 20px;font-size: 20px"  id="alert" class="btn purple">
    Данные уже отредактированы, ждите до завтра следующего редактирования
    </div>
<?php } ?>
 