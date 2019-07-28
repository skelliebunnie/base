<?php 
	$page_title = "BASE: Fancy";
	include "templates/header.php";
	//include "templates/sidebar.php";
?>
<style>
	.diamond {
		display: block;
		position: relative;
		height: 100px;
		width: 100px;
		overflow: hidden;
		transform: rotate(45deg);
		margin: 1rem auto;
	}

	.diamond img {
		position: absolute;
		top: 0;
		left: 0;
		background-image: url('https://picsum.photos/id/1002/800');
		background-size: cover;
		height: 200px;
		width: 200px;
	}

	.hex {
		flex: 0 0 auto;
		width: 100px;
		height: 55px;
		background: red;
		position: relative;
		margin: 3rem 0;
		overflow: hidden;
	}

	.hex:before {
		content: "";
		position: absolute;
		top: -25px;
		left: 0;
		width: 0;
		height: 0;
		border-left: 50px solid transparent;
		border-right: 50px solid  transparent;
		border-bottom: 25px solid red;
		overflow: hidden;
	}
	.hex:after {
		content: "";
		position: absolute;
		bottom: -25px;
		left: 0;
		width: 0;
		height: 0;
		border-left: 50px solid transparent;
		border-right: 50px solid  transparent;
		border-top: 25px solid red;
		overflow: hidden;
	}

	div.row.row-hexagons {
		justify-content: center;
		align-items: center;
		padding-top: 3rem;
	}

	.row-hexagons .hex:first-child {
		top: -30%;
		left: 1%;
	}

	.row-hexagons .hex:nth-child(2) {
		bottom: -30%;
		left: -1%;
	}

	.row-hexagons .hex:nth-child(3) {
		top: -30%;
		left: -3%;
	}

	.row-hexagons .hex:nth-child(4) {
		bottom: -30%;
		left: -5%;
	}

	.row-hexagons .hex:last-child {
		top: -30%;
		left: -7%;
	}

</style>
<main class="site-content bg-neutral-900">
	<div class="row row7">
		<div class="col">
			<div class="diamond">
				<img src="https://picsum.photos/id/1002/800" alt="Image 1002">
			</div>
		</div>
		<div class="col">
			<div class="diamond">
				<img src="https://picsum.photos/id/1002/800" alt="Image 1002">
			</div>
		</div>
		<div class="col">
			<div class="diamond">
				<img src="https://picsum.photos/id/1002/800" alt="Image 1002">
			</div>
		</div>
		<div class="col">
			<div class="diamond">
				<img src="https://picsum.photos/id/1002/800" alt="Image 1002">
			</div>
		</div>
		<div class="col">
			<div class="diamond">
				<img src="https://picsum.photos/id/1002/800" alt="Image 1002">
			</div>
		</div>
		<div class="col">
			<div class="diamond">
				<img src="https://picsum.photos/id/1002/800" alt="Image 1002">
			</div>
		</div>
		<div class="col">
			<div class="diamond">
				<img src="https://picsum.photos/id/1002/800" alt="Image 1002">
			</div>
		</div>
	</div>
	<div class="row border-neutral-100 row-hexagons">
		<div class="hex">
			
		</div>
		<div class="hex">
			
		</div>
		<div class="hex">
			
		</div>
		<div class="hex">
			
		</div>
		<div class="hex">
			
		</div>
	</div>
</main>
<?php include "templates/footer.php"; ?>