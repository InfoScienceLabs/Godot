<?php
		include("includes/connect.php");

		$cat = $_POST['cat'];
		$cat_get = $_GET['cat'];
		$act = $_POST['act'];
		$act_get = $_GET['act'];
		$id = $_POST['id'];
		$id_get = $_GET['id'];

		
				if($cat == "accounty" || $cat_get == "accounty"){
					$acc_name = mysqli_real_escape_string($link,$_POST["acc_name"]);
$api_key = mysqli_real_escape_string($link,$_POST["api_key"]);
$total_units = mysqli_real_escape_string($link,$_POST["total_units"]);
$droplets_running = mysqli_real_escape_string($link,$_POST["droplets_running"]);
$fips = mysqli_real_escape_string($link,$_POST["fips"]);
$fip_assigned = mysqli_real_escape_string($link,$_POST["fip_assigned"]);
$fip_enabled = mysqli_real_escape_string($link,$_POST["fip_enabled"]);
$snapid = mysqli_real_escape_string($link,$_POST["snapid"]);


				if($act == "add"){
					mysqli_query($link, "INSERT INTO `accounty` (  `acc_name` , `api_key` , `total_units` , `droplets_running` , `fips` , `fip_assigned` , `fip_enabled` , `snapid` ) VALUES ( '".$acc_name."' , '".$api_key."' , '".$total_units."' , '".$droplets_running."' , '".$fips."' , '".$fip_assigned."' , '".$fip_enabled."' , '".$snapid."' ) ");
				}elseif ($act == "edit"){
					mysqli_query($link, "UPDATE `accounty` SET  `acc_name` =  '".$acc_name."' , `api_key` =  '".$api_key."' , `total_units` =  '".$total_units."' , `droplets_running` =  '".$droplets_running."' , `fips` =  '".$fips."' , `fip_assigned` =  '".$fip_assigned."' , `fip_enabled` =  '".$fip_enabled."' , `snapid` =  '".$snapid."'  WHERE `id` = '".$id."' "); 	
					}elseif ($act_get == "delete"){
						mysqli_query($link, "DELETE FROM `accounty` WHERE id = '".$id_get."' ");
					}
					header("location:"."accounty.php");
				}
				
				if($cat == "feed" || $cat_get == "feed"){
					$command = mysqli_real_escape_string($link,$_POST["command"]);
$part = mysqli_real_escape_string($link,$_POST["part"]);
$url = mysqli_real_escape_string($link,$_POST["url"]);
$target = mysqli_real_escape_string($link,$_POST["target"]);
$ipaddr = mysqli_real_escape_string($link,$_POST["ipaddr"]);
$status = mysqli_real_escape_string($link,$_POST["status"]);
$assigned = mysqli_real_escape_string($link,$_POST["assigned"]);
$fulfilled = mysqli_real_escape_string($link,$_POST["fulfilled"]);


				if($act == "add"){
					mysqli_query($link, "INSERT INTO `feed` (  `command` , `part` , `url` , `target` , `ipaddr` , `status` , `assigned` , `fulfilled` ) VALUES ( '".$command."' , '".$part."' , '".$url."' , '".$target."' , '".$ipaddr."' , '".$status."' , '".$assigned."' , '".$fulfilled."' ) ");
				}elseif ($act == "edit"){
					mysqli_query($link, "UPDATE `feed` SET  `command` =  '".$command."' , `part` =  '".$part."' , `url` =  '".$url."' , `target` =  '".$target."' , `ipaddr` =  '".$ipaddr."' , `status` =  '".$status."' , `assigned` =  '".$assigned."' , `fulfilled` =  '".$fulfilled."'  WHERE `id` = '".$id."' "); 	
					}elseif ($act_get == "delete"){
						mysqli_query($link, "DELETE FROM `feed` WHERE id = '".$id_get."' ");
					}
					header("location:"."feed.php");
				}
				
				if($cat == "unity" || $cat_get == "unity"){
					$ip = mysqli_real_escape_string($link,$_POST["ip"]);
$name = mysqli_real_escape_string($link,$_POST["name"]);
$status = mysqli_real_escape_string($link,$_POST["status"]);
$region = mysqli_real_escape_string($link,$_POST["region"]);
$uid = mysqli_real_escape_string($link,$_POST["uid"]);
$feeds = mysqli_real_escape_string($link,$_POST["feeds"]);
$acid_id = mysqli_real_escape_string($link,$_POST["acid_id"]);
$kill = mysqli_real_escape_string($link,$_POST["kill"]);
$killed = mysqli_real_escape_string($link,$_POST["killed"]);


				if($act == "add"){
					mysqli_query($link, "INSERT INTO `unity` (  `ip` , `name` , `status` , `region` , `uid` , `feeds` , `acid_id` , `kill` , `killed` ) VALUES ( '".$ip."' , '".$name."' , '".$status."' , '".$region."' , '".$uid."' , '".$feeds."' , '".$acid_id."' , '".$kill."' , '".$killed."' ) ");
				}elseif ($act == "edit"){
					mysqli_query($link, "UPDATE `unity` SET  `ip` =  '".$ip."' , `name` =  '".$name."' , `status` =  '".$status."' , `region` =  '".$region."' , `uid` =  '".$uid."' , `feeds` =  '".$feeds."' , `acid_id` =  '".$acid_id."' , `kill` =  '".$kill."' , `killed` =  '".$killed."'  WHERE `id` = '".$id."' "); 	
					}elseif ($act_get == "delete"){
						mysqli_query($link, "DELETE FROM `unity` WHERE id = '".$id_get."' ");
					}
					header("location:"."unity.php");
				}
				
				if($cat == "users" || $cat_get == "users"){
					$name = mysqli_real_escape_string($link,$_POST["name"]);
$email = mysqli_real_escape_string($link,$_POST["email"]);
$password = mysqli_real_escape_string($link,$_POST["password"]);
$role = mysqli_real_escape_string($link,$_POST["role"]);


				if($act == "add"){
					mysqli_query($link, "INSERT INTO `users` (  `name` , `email` , `password` , `role` ) VALUES ( '".$name."' , '".$email."' , '".md5($password)."', '".$role."' ) ");
				}elseif ($act == "edit"){
					mysqli_query($link, "UPDATE `users` SET  `name` =  '".$name."' , `email` =  '".$email."' , `role` =  '".$role."'  WHERE `id` = '".$id."' "); 	
					}elseif ($act_get == "delete"){
						mysqli_query($link, "DELETE FROM `users` WHERE id = '".$id_get."' ");
					}
					header("location:"."users.php");
				}
				?>