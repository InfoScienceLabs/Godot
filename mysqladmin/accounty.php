<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-accounty.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Accounty</a>

				<h1>Accounty</h1>
				<p>This table includes <?php echo counting("accounty", "id");?> accounty.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Acc name</th>
			<th>Api key</th>
			<th>Total units</th>
			<th>Droplets running</th>
			<th>Fips</th>
			<th>Fip assigned</th>
			<th>Fip enabled</th>
			<th>Snapid</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$accounty = getAll("accounty");
				if($accounty) foreach ($accounty as $accountys):
					?>
					<tr>
		<td><?php echo $accountys['id']?></td>
		<td><?php echo $accountys['acc_name']?></td>
		<td><?php echo $accountys['api_key']?></td>
		<td><?php echo $accountys['total_units']?></td>
		<td><?php echo $accountys['droplets_running']?></td>
		<td><?php echo $accountys['fips']?></td>
		<td><?php echo $accountys['fip_assigned']?></td>
		<td><?php echo $accountys['fip_enabled']?></td>
		<td><?php echo $accountys['snapid']?></td>


						<td><a href="edit-accounty.php?act=edit&id=<?php echo $accountys['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $accountys['id']?>&cat=accounty" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				