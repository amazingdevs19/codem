<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<?php 
		try {
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		}

		} catch (Exception $e) {
				redirect('/auth/login/');
		}
		

	?>
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php echo $title; ?></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <style type="text/css">
    .error {
color: #D8000C;
background-color: #FFBABA;
}
 .error, .validation {
			border: 1px solid;
			margin: 5px 0px;
			padding: 5px;
			background-repeat: no-repeat;
			background-position: 10px center;
		}
    	
    </style>
</head>
<body >
<!--class="sidebar-mini"-->
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="<?php echo base_url(); ?>assets/img/full-screen-image-3.jpg">
        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="logo">
            <a href="http://www.wam360.com" class="logo-text">
                WAM360
            </a>
        </div>
		<div class="logo logo-mini">
			<a href="http://www.wam360.com" class="logo-text">
				360
			</a>
		</div>
<?php include('user_menu.php'); ?>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button><a class="navbar-brand" href="javascript:;" style="text-transform: capitalize;"><?=$title?></a>
					 
				</div>
				<div class="collapse navbar-collapse">

					<!--<form class="navbar-form navbar-left navbar-search-form" role="search">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-search"></i></span>
							<input type="text" value="" class="form-control" placeholder="Search...">
						</div>
					</form>
-->
					<ul class="nav navbar-nav navbar-right"><li>
									<a href="<?= base_url('support/create') ?>">
										<i class="pe-7s-help1 fa-lg"></i>
										<span> Help Center</span>
									</a>
								</li>
								
								<li>
									<a href="<?= base_url('auth/logout') ?>" class="text-danger">
										<i class="pe-7s-close-circle fa-lg"></i>
										<span>Log out</span>
									</a>
								</li>
					<!--<li>
                            <a href="<?= base_url('index.php/profile/referral') ?>">
                                <i class="pe-7s-piggy"></i> : 
                                <?php
                                $sum=0;
                                	foreach ($point as $row)
            							{
            							if($row->credit!=0){
            							$sum+= $row->credit;
            							}
            							
            							}
            							echo $sum;


                                  ?>
                            </a>
                        </li>-->
						<!--<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell-o"></i>
								<span class="notification">5</span>
								<p class="hidden-md hidden-lg">
									Notifications
									<b class="caret"></b>
								</p>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Notification 1</a></li>
								<li><a href="#">Notification 2</a></li>
								<li><a href="#">Notification 3</a></li>
								<li><a href="#">Notification 4</a></li>
								<li><a href="#">Another notification</a></li>
							</ul>
						</li>
-->
						<!--<li class="dropdown dropdown-with-icons">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-list"></i>
								<p class="hidden-md hidden-lg">
									More
									<b class="caret"></b>
								</p>
							</a>
							<ul class="dropdown-menu dropdown-with-icons">
								
								<li>
									<a href="<?= base_url('index.php/support/create') ?>">
										<i class="pe-7s-help1"></i> Help Center
									</a>
								</li>
								
								<li>
									<a href="<?= base_url('index.php/auth/logout') ?>" class="text-danger">
										<i class="pe-7s-close-circle"></i>
										<p>Log out
									</a>
								</li>
							</ul>
						</li>
-->
					</ul>
				</div>
			</div>
		</nav>

        <div class="content">
     

    

            <div class="container-fluid">

                <div class="row">
				
			