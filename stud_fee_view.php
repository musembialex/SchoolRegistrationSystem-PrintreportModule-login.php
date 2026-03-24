<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}
	$sql="SELECT * FROM student WHERE ID={$_GET["id"]}";
		$res=$db->query($sql);

		if($res->num_rows>0)
		{
			$row=$res->fetch_assoc();
		}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>View students</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php include"navbar.php";?><br>
		
			<div id="section">
				<?php include"sidebar.php";?><br><br><br>
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content1">
					
						<h3 > View Student Details</h3><br>
						<div class="ibox">
							<img src="<?php echo $row["SIMG"]; ?>" height="230" width="230">
							
						</div>
						<div class="tsbox">
						<table border="1px">
						
							<tr><th>Name </th> <td> <?php echo $row["NAME"]; ?></td></tr>
							<tr><th>Phone</th> <td> <?php echo $row["PHO"]; ?></td></tr>
							<tr><th>D.O.B </th> <td> <?php echo $row["DOB"]; ?></td></tr>
							<tr><th>Class </th> <td> <?php echo $row["SCLASS"]; ?></td></tr>
							<tr><th>Section </th> <td> <?php echo $row["SSEC"]; ?></td></tr>
							
							
						</table>
						</div>
				</div>	
			</div>
			<?php include"footer.php";?>
			
	</body>
</html>