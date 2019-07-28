<?php 
	$page_title = "BASE: Typography";
	include "templates/header.php";
	include "templates/sidebar.php";
?>
<main class="site-content pad-xl-around">
	<article class="row row4">
		<section class="col">
			<h1>Header 1</h1>
			<h2>Header 2</h2>
			<h3>Header 3</h3>
			<h4>Header 4</h4>
			<h5>Header 5</h5>
			<h6>Header 6</h6>
		</section>
		<section class="col">
			<h1>Header 1, extended length to check line-height</h1>
			<h2>Header 2, extended length to check line-height</h2>
			<h3>Header 3, extended length to check line-height</h3>
			<h4>Header 4, extended length to check line-height</h4>
			<h5>Header 5, extended length to check line-height</h5>
			<h6>Header 6, extended length to check line-height</h6>
		</section>
		<section class="col">
			<h1>Header 1</h1>
			<h2>Header 2</h2>
			<h3>Header 3</h3>
			<h4>Header 4</h4>
			<h5>Header 5</h5>
			<h6>Header 6</h6>
		</section>
		<section class="col">
			<h1>Header 1, extended length to check line-height</h1>
			<h2>Header 2, extended length to check line-height</h2>
			<h3>Header 3, extended length to check line-height</h3>
			<h4>Header 4, extended length to check line-height</h4>
			<h5>Header 5, extended length to check line-height</h5>
			<h6>Header 6, extended length<br>to check line-height</h6>
		</section>
	</article>
	<article class="row row3 border-top-cerulean-400 border-lg">
		<section class="col">
			<p>This is <samp>samp text</samp></p>
			<p>This is <code>code text</code></p>
			<p>Below is <strong>pre text</strong></p>
<pre>
&lt;div class="row"&gt;
&nbsp;&lt;div class="col col-12"&gt;
&nbsp;&nbsp;&lt;p&gt;This is a column&lt;/p&gt;
&nbsp;&lt;/div&gt;
&lt;/div&gt;
</pre>
		</section>
		<section class="col">
			<p>This is a paragraph. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate consequuntur alias quasi omnis ullam quam asperiores excepturi, corporis delectus ipsum ipsa distinctio porro ducimus quo voluptas dignissimos, veniam consectetur fugiat.</p>
			<p>This is another paragraph, in the same column. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate consequuntur alias quasi omnis ullam quam asperiores excepturi, corporis delectus ipsum ipsa distinctio porro ducimus quo voluptas dignissimos, veniam consectetur fugiat.</p>
		</section>
		<section class="col">
			<h4>A Blockquote</h4>
			<blockquote>
				My struggle is harsh and I come back
				with eyes tired
				at times from having seen
				the unchanging earth,
				but when your laughter enters
				it rises to the sky seeking me
				and it opens for me all
				the doors of life.
				<cite><em>Your Laughter</em> - Neruda, Pablo</cite>
			</blockquote>
		</section>
	</article>
</main>
<?php include "templates/footer.php"; ?>