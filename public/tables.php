<?php 
	$page_title = "BASE: Tables";
	include "templates/header.php";
	include "templates/sidebar.php";
?>
<main class="site-content pad-xl-around">
	<div class="row">
		<div class="col col-12 no-pad">
			<h2>Tables</h2>
		</div>
	</div>
	<div class="row">
		<div class="col col-12 no-pad">
			<table class='row-borders'>
				<caption>Sample table - with row borders, no striping</caption>
				<thead>
					<tr>
						<th scope='col'>Col 1</th>
						<th scope='col'>Col 2</th>
						<th scope='col'>Col 3</th>
						<th scope='col'>Col 4</th>
						<th scope='col'>Col 5</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope='row'>Cell A</th>
						<td>Cell B</td>
						<td>Cell C</td>
						<td>Cell D</td>
						<td>Cell E</td>
					</tr>
					<tr>
						<th scope='row'>Cell I</th>
						<td>Cell II</td>
						<td>Cell III</td>
						<td>Cell IV</td>
						<td>Cell V</td>
					</tr>
					<tr>
						<th scope='row'>Cell 一</th>
						<td>Cell 二</td>
						<td>Cell 三</td>
						<td>Cell 四</td>
						<td>Cell 五</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th scope="row" colspan="4" class="text-right">Total Rows</th>
						<td>3</td>
					</tr>
				</tfoot>
			</table>
		</div>
		<hr class="hr hr-sm hr-tertiary-400 margin-xl-bottom">
		<div class="col col-12 no-pad">
			<table class='column-borders footer-header-border'>
				<caption>Sample table - with (all) column borders, footer header border, no striping</caption>
				<thead>
					<tr>
						<th scope='col'>Col 1</th>
						<th scope='col'>Col 2</th>
						<th scope='col'>Col 3</th>
						<th scope='col'>Col 4</th>
						<th scope='col'>Col 5</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope='row'>Cell A</th>
						<td>Cell B</td>
						<td>Cell C</td>
						<td>Cell D</td>
						<td>Cell E</td>
					</tr>
					<tr>
						<th scope='row'>Cell I</th>
						<td>Cell II</td>
						<td>Cell III</td>
						<td>Cell IV</td>
						<td>Cell V</td>
					</tr>
					<tr>
						<th scope='row'>Cell 一</th>
						<td>Cell 二</td>
						<td>Cell 三</td>
						<td>Cell 四</td>
						<td>Cell 五</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th scope="row" colspan="4" class="text-right">Total Rows</th>
						<td>3</td>
					</tr>
				</tfoot>
			</table>
		</div>
		<hr class="hr hr-sm hr-tertiary-400 margin-xl-bottom">
		<div class="col col-12 no-pad">
			<table class='all-borders'>
				<caption>Sample table - with all borders, no striping</caption>
				<thead>
					<tr>
						<th scope='col'>Col 1</th>
						<th scope='col'>Col 2</th>
						<th scope='col'>Col 3</th>
						<th scope='col'>Col 4</th>
						<th scope='col'>Col 5</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope='row'>Cell A</th>
						<td>Cell B</td>
						<td>Cell C</td>
						<td>Cell D</td>
						<td>Cell E</td>
					</tr>
					<tr>
						<th scope='row'>Cell I</th>
						<td>Cell II</td>
						<td>Cell III</td>
						<td>Cell IV</td>
						<td>Cell V</td>
					</tr>
					<tr>
						<th scope='row'>Cell 一</th>
						<td>Cell 二</td>
						<td>Cell 三</td>
						<td>Cell 四</td>
						<td>Cell 五</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th scope="row" colspan="4" class="text-right">Total Rows</th>
						<td>3</td>
					</tr>
				</tfoot>
			</table>
		</div>
		<hr class="hr hr-sm hr-tertiary-400 margin-xl-bottom">
		<div class="col col-12 no-pad">
			<table class='striped'>
				<caption>Sample table - with striping, no borders</caption>
				<thead>
					<tr>
						<th scope='col'>Col 1</th>
						<th scope='col'>Col 2</th>
						<th scope='col'>Col 3</th>
						<th scope='col'>Col 4</th>
						<th scope='col'>Col 5</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope='row'>Cell A</th>
						<td>Cell B</td>
						<td>Cell C</td>
						<td>Cell D</td>
						<td>Cell E</td>
					</tr>
					<tr>
						<th scope='row'>Cell I</th>
						<td>Cell II</td>
						<td>Cell III</td>
						<td>Cell IV</td>
						<td>Cell V</td>
					</tr>
					<tr>
						<th scope='row'>Cell 一</th>
						<td>Cell 二</td>
						<td>Cell 三</td>
						<td>Cell 四</td>
						<td>Cell 五</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th scope="row" colspan="4" class="text-right">Total Rows</th>
						<td>3</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</main>
<?php include "templates/footer.php"; ?>