<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<title><?php echo($page_title); ?></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="page-container" class="sidebar-fullheight">
	<header class="site-header row">
		<div class="col col-12">
			<h1 class="site-title"><a href="./index.php">BASE FRAMEWORK</a></h1>
			<h3 class="sub-title text-light">This is a subtitle!</h3>
		</div>
	</header>
	<nav class="site-nav">
		<ul class="nav nav-horizontal">
			<li class='nav-item'><a href="./index.php">Home</a></li>
			<li class='nav-item'><a href="./grid-layout.php">Grid</a></li>
			<li class='nav-item'><a href="./colors.php">Colors</a></li>
			<li class='nav-item'><a href="./tables.php">Tables</a></li>
		</ul>
	</nav>