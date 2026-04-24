<?php 
require 'config.php';
if(isset($_POST['btn'])){
	$db->query('INSERT INTO etudiants(nom,prenom,id_filieres) VALUES("'.$_POST['nom'].'","'.$_POST['prenom'].'","'.$_POST['filieres'].'")');
}

?>



<form methode="POST" action="index.php">
	<input type="name" name="nom" placeholder="nom" /><br />
	<input type="name" name="prenom" placeholder="prenom" /><br />
	<select name="filieres">
		<option value = 'sil'</option>
		<option value = 'rit'</option>
		<option value = 'si'</option>
	</select>
	<input type submit="submit" name="btn" value="ajout" />
</form>


