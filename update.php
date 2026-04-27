<?php
require 'config.php';
if(isset($_GET['id'])){
	$id = $_GET['id'] ?? null;
	if(!$id){
		header("Location: index.php");
		exit();
	}
	$req = $db->prepare("SELECT e.id, e.nom as nomEtu, e.prenom, e.id_filieres, f.nom FROM etudiants e JOIN filieres f ON e.id_filieres = f.id WHERE e.id=?");
	$req->execute(array($id));
	$etudiant = $req->fetch();
}

if(isset($_POST['btn'])){

    $nomEtu = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $filiere_id = $_POST['filiere_id'];
	$id = $_POST['id'];

    $req=$db->prepare("UPDATE etudiants SET nom=?, prenom=?, id_filieres=? WHERE id=?");
	$req->execute([$nomEtu,$prenom,$filiere_id,$id]);

    header("Location: index.php");
	exit();
}
?>
<head>
	<title>Modifier étudiant</title>
	<link rel="stylesheet" href="style.css">
</head>
<form action="update.php" method="POST">
	<input type="hidden" name="id" value="<?=$etudiant['id']?>">
	<input type="text" name="nom" value= "<?=$etudiant['nomEtu']?>" /><br />
	<input type="text" name="prenom" value= "<?=$etudiant['prenom']?>" /><br />
	<select name="filiere_id">
		<?php
			$filieres = $db->query("SELECT * FROM filieres");
			$filieres = $filieres->fetchAll();
			foreach($filieres as $filiere):
		?>
		<option value ="<?=$filiere['id']?>" <?= $filiere['id']==$etudiant['id_filieres'] ? 'selected' : ""?>> <?=$filiere['nom']?> </option>
		<?php
			endforeach;
		?>
	</select><br />
	<input type="submit" name="btn" value="Modifier" />
</form>