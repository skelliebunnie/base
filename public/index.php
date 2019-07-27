<?php 
	$page_title = "BASE: Index";
	include "templates/header.php";
	include "templates/sidebar.php";
?>
<main class="site-content">
	<div class="hero-container">
		<div class="row hero-section hero-header">
			<div class="col col-12 text-center">
				<h1>Hero Header</h1>
			</div>
			<div class="row">
				<div class="col col-7 col-margin-lg-y hero-header-content text-lh-lg">
					<p>Hero Header Content</p>
					<a href="#" class="btn btn-dark">button<br><span class="text-sm">small</span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row row2 hero-double">
		<div class="col col-margin hero-section">
			<div class='hero-content left md'>
				<h3>Retaining Wall</h3>
				<p>Add value and privacy when you replace your worn wood or wire fence with a <em>beautiful</em> and <strong>long-lasting retaining wall</strong>.</p>
			</div>
		</div>
		<div class="col col-margin hero-section">
			<div class='hero-content right md'>
				<h3>Veneers</h3>
				<p>Increase the <em>charm and sophistication</em> of your home with tastefully <strong>custom-designed veneers</strong>. <span class="note">Brick & stone available.</span></p>
			</div>
		</div>
	</div>
</main>
<?php include "templates/footer.php"; ?>