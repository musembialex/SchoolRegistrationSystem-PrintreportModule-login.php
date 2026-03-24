<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["ID"]))
	{
		echo"<script>window.open('add_notice.php?mes=Access Denied...','_self');</script>";
		
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>View notice </title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php include"navbar.php";?><br>
			<div id="section">
			
				<h3 class="text">Welcome <?php echo $_SESSION["NAME"]; ?></h3><br><hr><br>
				<div class="content">
					
						<h3 >View notice</h3><br>
					
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<table border="1px" >
						<tr>
                            
							<th>NOTICE</th>
							
						</tr>
						<?php
							$s="select * from notice ";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								
								while($r=$res->fetch_assoc())
								{
									
									echo"
										<tr>
											
											<td>{$r["message"]}</td>
											
										</tr>
									
									
									
									";
								}
							}
							else
							{
								echo "No notice";
							}
						
						?>
						
					</table>
				
				</div>
				
				
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>