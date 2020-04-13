<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit"){
					$id = $_GET['id'];
					$accounty = getById("accounty", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Accounty</legend>
						<input name="cat" type="hidden" value="accounty">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Acc name</label>
							<input class="form-control" type="text" name="acc_name" value="<?=$accounty['acc_name']?>" /><br>
							
							<label>Api key</label>
							<input class="form-control" type="text" name="api_key" value="<?=$accounty['api_key']?>" /><br>
							
							<label>Total units</label>
							<input class="form-control" type="text" name="total_units" value="<?=$accounty['total_units']?>" /><br>
							
							<label>Droplets running</label>
							<input class="form-control" type="text" name="droplets_running" value="<?=$accounty['droplets_running']?>" /><br>
							
							<label>Fips</label>
							<input class="form-control" type="text" name="fips" value="<?=$accounty['fips']?>" /><br>
							
							<label>Fip assigned</label>
							<input class="form-control" type="text" name="fip_assigned" value="<?=$accounty['fip_assigned']?>" /><br>
							
							<label>Fip enabled</label>
							<input class="form-control" type="text" name="fip_enabled" value="<?=$accounty['fip_enabled']?>" /><br>
							
							<label>Snapid</label>
							<input class="form-control" type="text" name="snapid" value="<?=$accounty['snapid']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				