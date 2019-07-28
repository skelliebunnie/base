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
<div id="page-container" class="sidebar-none">
	<header class="site-header row">
		<div class="col col-12">
			<h1 class="site-title"><a href="./index.php">BASE FRAMEWORK</a></h1>
			<h3 class="sub-title text-light">This is a subtitle!</h3>
		</div>
	</header>
	<nav class="site-nav">
		<ul class="nav nav-horizontal">
			<li class='nav-item <?php if($page_title=='BASE: Index' || $page_title=='index') { echo "active"; } ?>'>
				<a href="./index.php">Home</a>
			</li>
			<li class='nav-item <?php if($page_title=='BASE: Rows') { echo "active"; } ?>'>
				<a href="./rows.php">Rows & Columns</a>
			</li>
			<li class='nav-item <?php if($page_title=='BASE: Colors') { echo "active"; } ?>'>
				<a href="./colors.php">Colors</a>
			</li>
			<li class='nav-item <?php if($page_title=='BASE: Tables') { echo "active"; } ?>'>
				<a href="./tables.php">Tables</a>
			</li>
			<li class='nav-item <?php if($page_title=='BASE: Forms') { echo "active"; } ?>'>
				<a href="./form.php">Form</a>
			</li>
			<li class='nav-item <?php if($page_title=='BASE: Typography') { echo "active"; } ?>'>
				<a href="./typography.php">Typography</a>
			</li>
			<li class='nav-item <?php if($page_title=='BASE: Gallery') { echo "active"; } ?>'>
				<a href="./gallery.php">Gallery</a>
			</li>
			<li class='nav-item <?php if($page_title=='BASE: Fancy') { echo "active"; } ?>'>
				<a href="./fancy.php">Fancy</a>
			</li>
		</ul>
	</nav>