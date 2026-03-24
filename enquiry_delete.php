<?php
	include "database.php";
	session_start();
	$s="delete from contact where conid={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('enquiry.php?mes=Data Deleted...','_self');</script>";


?>