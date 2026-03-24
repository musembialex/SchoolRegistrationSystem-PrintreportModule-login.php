<?php
	include "database.php";
	session_start();
	$s="delete from application where apid={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('application.php?mes=Data Deleted..','_self');</script>";
?>