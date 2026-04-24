<?php
	require 'connexion.php';
	$req = $db->query("SELECT * FROM filieres");
	$filieres = $req->fetchAll();
?>

<head>
	<title>Ajouter étudiant</title>
	<link rel="stylesheet" href="style.css">
</head>
<form action="traitement.php" method="POST">
	<input type="text" name="nom" placeholder="Nom" /><br />
	<input type="text" name="prenom" placeholder="Prénom" /><br />
	<select name="filiere_id">
        	<option value="">Choisir une filière</option>
		<?php foreach($filieres as $f): ?>
			<option value="<?= $f['id'] ?>"><?= $f['nom'] ?> </option>
			<?php endforeach; ?>
		</select><br />
		<input type="submit" name="btn" value="Ajouter" />
	</form>


