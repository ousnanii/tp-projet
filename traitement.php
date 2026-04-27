<?php
	require 'config.php';
	if(isset($_POST['btn'])){
		$db->query("INSERT INTO etudiants (nom, prenom, filiere_id) VALUES('".$_POST['nom']."', '".$_POST['prenom']."', '".$_POST['filiere_id']."')");
		header("Location: index.php");
	}
?>