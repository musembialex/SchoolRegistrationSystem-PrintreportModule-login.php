<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["TID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Manage Notice</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
				<?php include"navbar.php";?><br>
				
				
			<div id="section">
					<?php include"sidebar.php";?><br><br><br>
					<h3 class="text">Welcome <?php echo $_SESSION["TNAME"]; ?></h3><br><hr><br>
					<div class="content1">
					
						<h3 > Add Notice</h3><br>
						<?php
							if(isset($_POST["submit"]))
							{
								$sq="insert into notice(message) values ('{$_POST["message"]}')";
								if($db->query($sq))
								{
									echo "<div class='success'>Insert Success..</div>";
								}
								else
								{
									echo "<div class='error'>Insert Failed..</div>";
								}
							}
						?>
						
						<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
						   <label>notice</label><br>
						   <input type="text" name="message" required class="input">
						   <button type="submit" class="btn" name="submit">Add notice</button>
						</form>
				
				
					</div>
				
				
				<div class="tbox" >
					<h3 style="margin-top:30px;"> Previous Notices</h3><br>
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<table border="1px" >
						<tr>
							
							<th>notice</th>
							<th>Delete</th>
						</tr>
						<?php
							$s="select * from notice";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								
								while($r=$res->fetch_assoc())
								{
									
									echo "
										<tr>
										
										<td>{$r["message"]}</td>
										<td><a href='notice_delete.php?id={$r["nid"]}' class='btnr'>Delete</a></td>
										</tr>
									
									";
									
								}
								
							}
							else
							{
								echo "No Record Found";
							}
						?>
						
					</table>
				</div>
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>