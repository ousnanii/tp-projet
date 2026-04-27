<?php
	require 'config.php';
	$req = $db->query("SELECT * FROM filieres");
	$filieres = $req->fetchAll();
	$req2 = $db->query("SELECT e.*, f.nom AS filiere FROM etudiants e JOIN filieres f ON f.id = e.id_filieres  ");
	$etudiants = $req2->fetchAll();
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
	<script src="assets/js/script.js"></script>
</form><br />

<table border="1" cellpadding="10">
	<tr>
		<th>Nom</th>
		<th>Prénom</th>
		<th>Filière</th>
		<th>Actions</th>
	</tr>
	<?php foreach($etudiants as $e): ?>
		<tr>
			<td><?= $e['nom'] ?></td>
			<td><?= $e['prenom'] ?></td>
			<td><?= $e['filiere'] ?></td>
			<td>
				<a href="update.php?id=<?=$e['id'] ?>">Modifier</a>
				<a href="delete.php?id=<?= $e['id'] ?>" onclick="return confirmer()">Supprimer</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>

