<?php

	// Load Configuration
	require_once "config.php";
	
	// Load Functions
	require_once "functions.php";
	
?>
<HTML lang="EN">

	<HEAD>
	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Paladium Server Website | Created by Randamonium">
		<meta name="author" content="Randamonium">
		
		<title>Haven Panel & IDE</title>
		
		<!-- Bootstrap CSS -->
		<link href="./assets/css/bootstrap.css" rel="stylesheet">
		
		<!-- Font Awesome CSS -->
		<link href="./assets/css/font-awesome.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link href="./assets/css/admin.css" rel="stylesheet">
		
	</HEAD>
	
	<BODY>
	
		<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
			<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?php echo get_url(); ?>">Haven Realms Panel & IDE</a>
			<ul class="navbar-nav px-3">
				<li class="nav-item text-nowrap">
					<a class="nav-link" href="#">Sign out</a>
				</li>
			</ul>
		</nav>
		
		<div class="container-fluid">
			<div class="row">
			
				<!-- Sidebar -->
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link active" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="./users.php"><i class="fas fa-users"></i> Users</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="./users.php"><i class="fas fa-server"></i> Servers</a>
						</li>
					</ul>
				</div>	