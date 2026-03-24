<div class="sidebar"><br>
<h3 class="text">Dashboard</h3><br><hr><br>
<ul class="s">
<?php
	if(isset($_SESSION["AID"]))
	{
		echo'
			<li class="li"><a href="admin_home.php">School Information</a></li>
			<li class="li"><a href="add_class.php"> Class</a></li>
			<li class="li"><a href="add_sub.php"> Subject</a></li>

			<li class="li"><a href="add_staff.php"> Staff</a></li>
			<li class="li"><a href="view_staff.php">View Staff</a></li>
			<li class="li"><a href="set_exam.php">Set Exam</a></li>
			<li class="li"><a href="view_exam.php">View Exam</a></li>
			
			<li class="li"><a href="student.php"target="_blank"> View Student</a></li>
			<li class="li"><a href="admin_add_notice.php">Add notice</a></li>
			<li class="li"><a href="stud_fee.php">Fee Payments</a></li>
			<li class="li"><a href="enquiry.php">View Enquiries</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>
		
		';
	
	
	}
	elseif(isset($_SESSION["TID"])){
		echo'
			<li class="li"><a href="teacher_home.php">Profile</a></li>
			<li class="li"><a href="handle_class.php"> Handled Class</a></li>
			<li class="li"><a href="add_stud.php"> Students</a></li>
			<li class="li"><a href="view_stud_teach.php" target="_blank"> View Student</a></li>

			<li class="li"><a href="tech_view_exam.php">View Exam</a></li>
			<li class="li"><a href="add_mark.php">Add Marks</a></li>
			<li class="li"><a href="view_mark.php">View Marks</a></li>
			<li class="li"><a href="add_notice.php">Add notice</a></li>
			
			<li class="li"><a href="view_application.php">View applications</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>

		
		';
	}
	elseif(isset($_SESSION["ID"]))
	{
		echo'
			<li class="li"><a href="Student_home.php">Profile</a></li>
			<li class="li"><a href="stud_view_exam.php">View Exam</a></li>
			<li class="li"><a href="stud_view_mark.php">View Marks</a></li>
			<li class="li"><a href="view_notice.php">Important notice</a></li>
			<li class="li"><a href="application.php">Application</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>
		
		';
	
	
	}
	


?>
	

</ul>

</div>