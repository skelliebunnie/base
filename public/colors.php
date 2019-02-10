<?php 
	$page_title = "COLORS";
	include "templates/header.php";
	include "templates/sidebar.php";
?>
	<link rel="stylesheet" href="css/color-charts.css">
	<main class="site-content">
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
		<div class="row">
			<!-- FULL RANGE, DEFAULT -->
			<section class="column col2 pad-x pad-md-left">
				<div class="row">
					<h2>Default Color Ranges</h2>
					<p>Each color defined in Core Colors is set to &lt;name&gt;-400, and the 3 lighter (300 - 100) and 3 darker (400 - 700) colors are calculated from that central point. The calculations take the luminance of the original (400) color into account.</p>
				</div>
				<div id="colors-default" class="column col1">
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p>
				</div>
			</section>
			<!-- FULL RANGE, ADAPTIVE -->
			<section class="column col2 pad-x pad-md-right">
				<div class="row">
					<h2>Adaptive Color Ranges</h2>
					<p>The luminance of each color defined in Core Colors is assessed, and the color set to the appropriate "range number" (100 - 700, lightest to darkest). Lighter / darker colors are calculated as necessary from that point.</p>
				</div>
				<div id="colors-adaptive" class="column col1">
					<p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p>
				</div>
			</section>
		</div>
	</main>
<?php include "templates/footer.php"; ?>