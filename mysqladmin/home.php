<?php


		include "includes/header.php";
		?>
		<table class="table table-striped">
		<tr>
		<th class="not">Table</th>
		<th class="not">Entries</th>
		</tr>
		
				<tr>
					<td><a href="accounty.php">Accounty</a></td>
					<td><?=counting("accounty", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="feed.php">Feed</a></td>
					<td><?=counting("feed", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="unity.php">Unity</a></td>
					<td><?=counting("unity", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="users.php">Users</a></td>
					<td><?=counting("users", "id")?></td>
				</tr>
				<tr>
					<td> Open</td>
					<td><?=qStatus("open","id")?></td>
				</tr>                               
				 <tr>
                                        <td> Done</td>
                                        <td><?=qStatus("done","id")?></td>
                                </tr>
                                <tr>
                                        <td> Active</td>
                                        <td> <?=qStatus("active","id")?></td>
                                </tr>

                                <tr>
                                        <td></td>
                                        <td>
<?php 
  
// Set the current working directory 
$directory = "/home/server/data/"; 
  
// Initialize filecount variavle 
$filecount = 0; 
  
$files2 = glob( $directory ."*/*.json" ); 
  
if( $files2 ) { 
    $filecount = count($files2); 
} 
  
echo $filecount . "files "; 
  
?> 
</td>
                                </tr>

				</table>
			<?php include "includes/footer.php";?>
			
