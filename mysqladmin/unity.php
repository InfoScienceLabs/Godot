<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-unity.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Unity</a>

				<h1>Unity</h1>
				<p>This table includes <?php echo counting("unity", "id");?> unity.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Ip</th>
			<th>Name</th>
			<th>Status</th>
			<th>Region</th>
			<th>Uid</th>
			<th>Feeds</th>
			<th>Acid id</th>
			<th>Kill</th>
			<th>Killed</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$unity = getAll("unity");
				if($unity) foreach ($unity as $unitys):
					?>
					<tr>
		<td><?php echo $unitys['id']?></td>
		<td><?php echo $unitys['ip']?></td>
		<td><?php echo $unitys['name']?></td>
		<td><?php echo $unitys['status']?></td>
		<td><?php echo $unitys['region']?></td>
		<td><?php echo $unitys['uid']?></td>
		<td><?php echo $unitys['feeds']?></td>
		<td><?php echo $unitys['acid_id']?></td>
		<td><?php echo $unitys['kill']?></td>
		<td><?php echo $unitys['killed']?></td>


						<td><a href="edit-unity.php?act=edit&id=<?php echo $unitys['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $unitys['id']?>&cat=unity" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				