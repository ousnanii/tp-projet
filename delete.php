<?php
	require 'config.php';

	if(isset($_GET['id'])){
		$db->query("DELETE FROM etudiants WHERE id='".$_GET['id']."'");
		header("Location: index.php");
	}
?>
