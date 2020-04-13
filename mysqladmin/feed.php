<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-feed.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Feed</a>

				<h1>Feed</h1>
				<p>This table includes <?php echo counting("feed", "id");?> feed.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Command</th>
			<th>Part</th>
			<th>Url</th>
			<th>Target</th>
			<th>Ipaddr</th>
			<th>Status</th>
			<th>Assigned</th>
			<th>Fulfilled</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$feed = getAll("feed");
				if($feed) foreach ($feed as $feeds):
					?>
					<tr>
		<td><?php echo $feeds['id']?></td>
		<td><?php echo $feeds['command']?></td>
		<td><?php echo $feeds['part']?></td>
		<td><?php echo $feeds['url']?></td>
		<td><?php echo $feeds['target']?></td>
		<td><?php echo $feeds['ipaddr']?></td>
		<td><?php echo $feeds['status']?></td>
		<td><?php echo $feeds['assigned']?></td>
		<td><?php echo $feeds['fulfilled']?></td>


						<td><a href="edit-feed.php?act=edit&id=<?php echo $feeds['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $feeds['id']?>&cat=feed" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				