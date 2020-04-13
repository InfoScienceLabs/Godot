<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit"){
					$id = $_GET['id'];
					$feed = getById("feed", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Feed</legend>
						<input name="cat" type="hidden" value="feed">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Command</label>
							<input class="form-control" type="text" name="command" value="<?=$feed['command']?>" /><br>
							
							<label>Part</label>
							<input class="form-control" type="text" name="part" value="<?=$feed['part']?>" /><br>
							
							<label>Url</label>
							<input class="form-control" type="text" name="url" value="<?=$feed['url']?>" /><br>
							
							<label>Target</label>
							<input class="form-control" type="text" name="target" value="<?=$feed['target']?>" /><br>
							
							<label>Ipaddr</label>
							<input class="form-control" type="text" name="ipaddr" value="<?=$feed['ipaddr']?>" /><br>
							
							<label>Status</label>
							<input class="form-control" type="text" name="status" value="<?=$feed['status']?>" /><br>
							
							<label>Assigned</label>
							<input class="form-control" type="text" name="assigned" value="<?=$feed['assigned']?>" /><br>
							
							<label>Fulfilled</label>
							<input class="form-control" type="text" name="fulfilled" value="<?=$feed['fulfilled']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				