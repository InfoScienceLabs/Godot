<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit"){
					$id = $_GET['id'];
					$unity = getById("unity", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Unity</legend>
						<input name="cat" type="hidden" value="unity">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Ip</label>
							<input class="form-control" type="text" name="ip" value="<?=$unity['ip']?>" /><br>
							
							<label>Name</label>
							<input class="form-control" type="text" name="name" value="<?=$unity['name']?>" /><br>
							
							<label>Status</label>
							<input class="form-control" type="text" name="status" value="<?=$unity['status']?>" /><br>
							
							<label>Region</label>
							<input class="form-control" type="text" name="region" value="<?=$unity['region']?>" /><br>
							
							<label>Uid</label>
							<input class="form-control" type="text" name="uid" value="<?=$unity['uid']?>" /><br>
							
							<label>Feeds</label>
							<input class="form-control" type="text" name="feeds" value="<?=$unity['feeds']?>" /><br>
							
							<label>Acid id</label>
							<input class="form-control" type="text" name="acid_id" value="<?=$unity['acid_id']?>" /><br>
							
							<label>Kill</label>
							<input class="form-control" type="text" name="kill" value="<?=$unity['kill']?>" /><br>
							
							<label>Killed</label>
							<input class="form-control" type="text" name="killed" value="<?=$unity['killed']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				