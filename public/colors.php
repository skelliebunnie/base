<?php 
	$page_title = "BASE: Colors";
	include "templates/header.php";
	include "templates/sidebar.php";
?>
	<link rel="stylesheet" href="css/color-charts.css">
	<main class="site-content" style="background-color: gainsboro;">
		<div class="row">
			<!-- 400 ONLY, ANALOGOUS -->
			<section class="column col3 pad-x">
				<div class="row">
					<h2 class="no-margin">Analogous</h2>
				</div>
				<div class="column col1" id="analogous-400">
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
				</div>
			</section>
			<!-- 400 ONLY, COMPOUND -->
			<section class="column col3 pad-x">
				<div class="row">
					<h2 class="no-margin">Compound</h2>
				</div>
				<div class="column col1" id="compound-400">
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
				</div>
			</section>
			<!-- 400 ONLY, TETRAD (rectangular) -->
			<section class="column col3 pad-x">
				<div class="row">
					<h2 class="no-margin">Tetrad [rectangular]</h2>
				</div>
				<div class="column col1" id="tetrad-400">
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
				</div>
			</section>
		</div>
		<div class="row">
			<!-- 400 ONLY, QUADRATIC (square Tetrad) -->
			<section class="column col3 pad-x">
				<div class="row">
					<h2 class="no-margin">Tetrad [square]</h2>
				</div>
				<div class="column col1" id="quadratic-400">
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
				</div>
			</section>
			<!-- 400 ONLY, TRIAD -->
			<section class="column col3 pad-x">
				<div class="row">
					<h2 class="no-margin">Triad</h2>
				</div>
				<div class="column col1" id="triad-400">
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
				</div>
			</section>
			<!-- 400 ONLY, SPLIT -->
			<section class="column col3 pad-x">
				<div class="row">
					<h2 class="no-margin">Split</h2>
				</div>
				<div class="column col1" id="split-400">
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
					<p></p>
				</div>
			</section>
		</div>
		<!-- FULL RANGES, DEFAULT & ADAPTIVE -->
		<div class="row row3">
			<!-- FULL RANGE, DEFAULT -->
			<section class="column col pad-around pad-md-left">
				<div class="row">
					<h2>Default Color Ranges</h2>
					<p>Each of the original 'core colors' is set to 400 (mid), and lighter/darker is assessed from that point, based on the mid colors luminance.</p>
				</div>
				<div id="colors-default" class="column col1">
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p>	
				</div>
			</section>
			<!-- FULL RANGE, ADAPTIVE -->
			<section class="column col pad-around pad-md-right">
				<div class="row">
					<h2>Adaptive Color Ranges</h2>
					<p>The original 'core colors' are placed at 100-700 based on individual luminance. Lighter/Darker colors are calculated from there as necessary.</p>
				</div>
				<div id="colors-adaptive" class="column col1">
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p>					
				</div>
			</section>
			<!-- FULL RANGE, STATIC -->
			<section class="column col pad-around pad-md-right">
				<div class="row">
					<h2>Static Color Ranges</h2>
					<p>The lightness of each color is set to a specific amount, ensuring that all colors have the exact same light-dark range. Static range offers "depth" of 7 or 9 [+ {color}-50, for 10 total] (100-700 or 50-900)</p>
				</div>
				<div id="colors-static" class="column col1">
					<!-- green -->
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<!-- blue -->
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<!-- yellow -->
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<!-- red -->
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<!-- neutral -->
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<!-- analogous1 -->
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<!-- analogous2 -->
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<!-- analogous3 -->
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<!-- analogous4 -->
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p>
					<!-- complement -->
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p>
				</div>
			</section>
		</div>
	</main>
<?php include "templates/footer.php"; ?>