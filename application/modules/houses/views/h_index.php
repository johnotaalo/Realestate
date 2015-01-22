<?php //echo "<pre>";print_r($houses_info);echo "</pre>";exit; ?>
<html>
<head>
	<title>Houses|List</title>
</head>
<body>
	<div class="block-flat">
		<div class="header">
			<h3>Houses</h3>
		</div>
		<div class="content">
			<table class="no-border">
				<thead class="no-border">
					<tr>
						<th style="width:auto;">House No.</th>
						<th style="width:auto;">Estate Name</th>
						<th style="width:auto;">Location</th>
						<th style="width:auto;">House State.</th>
						<th style="width:auto;">House Building Name</th>
						<th style="width:auto;">House Description</th>
					</tr>
				</thead>
				<tbody class="no-border-x">
					<?php 
					foreach ($houses_info as $info) {
					echo "
					<tr>
						<td>".$info['house_no']."</td>
						<td>".$info['est_name']."</td>
						<td>".$info['location']."</td>
						<td>".$info['state']."</td>
						<td>".$info['build_name']."</td>
						<td>".$info['description']."</td>
					</tr>
					"; 
					}?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>