<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>View Enquiries</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
			<?php include"navbar.php";?><br>
			
			
			
			<div id="section">
				
					<?php include"sidebar.php";?><br><br><br>
					
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
					
				<div class="content">
					
						<h3 >View Enquiry Details</h3><br>
						
						<?php
							if(isset($_GET["mes"]))
								{
									echo"<div class='error'>{$_GET["mes"]}</div>";	
								}
					
						?>
						
						<table border="1px">
							<tr>
								<th>Name</th>
								<th>Phone no. </th>
								
								<th>Email</th>
                                <th>Delete </th>
							</tr>
							<?php
								$s="select * from contact";
								$res=$db->query($s);
								if($res->num_rows>0)
								{
									$i=0;
									while($r=$res->fetch_assoc())
									{
										$i++;
										echo "
											<tr>
												
												<td>{$r["conname"]}</td>
												<td>{$r["conpno"]}</td>
												<td>{$r["conemail"]}</td>
												
												<td><a href='enquiry_delete.php?id={$r["conid"]}' class='btnr'>Delete Enquiry</a></td>
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