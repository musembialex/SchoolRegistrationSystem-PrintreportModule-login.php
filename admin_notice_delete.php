<?php
	include "database.php";
	session_start();
	$s="delete from notice where nid={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('admin_add_notice.php?mes=Data Deleted..','_self');</script>";
?>