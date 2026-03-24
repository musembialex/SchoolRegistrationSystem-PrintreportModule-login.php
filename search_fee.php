<?php 
	include"database.php";
	
	$sql="SELECT * FROM student WHERE RNO LIKE '{$_POST["s"]}%' ";
	$res=$db->query($sql);
		echo "<table border='1px' class='table'>
				<tr>
					<th>S.No</th>
                   
					<th>Name</th>
                    <th>Registration no.</th>
					<th>D.O.B</th>
					<th>Class</th>
                    <th>Sec</th>
					<th>View</th>
					
				</tr>
				";
	if($res->num_rows>0)
		
	{
		$i=0;
		while($row=$res->fetch_assoc())
		{
			$i++;
			echo "<tr>
				<td>{$i}</td>
               
				<td>{$row["NAME"]}</td>
                <td>{$row["RNO"]}</td>
				<td>{$row["DOB"]}</td>
				<td>{$row["SCLASS"]}</td>
                <td>{$row["SSEC"]}</td>
				<td><a href='stud_fee_view.php?id={$row["ID"]}' class='btnb'>View</a></td>
                
				
				</tr>
			";
		}
				echo "</table>";
	}
		
	else
	{
		echo "<p>No Record Found</p>";
	}
	
?>