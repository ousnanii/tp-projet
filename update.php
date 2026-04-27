

<head>
	<title>Modifier étudiant</title>
	<link rel="stylesheet" href="style.css">
</head>
<form action="update.php" method="POST">
	<input type="text" name="nom" value= "<?=$etudiant['nom']?>" /><br />
	<input type="text" name="prenom" value= "<?=$etudiant['prenom']?>" /><br />

	
	<input type="submit" name="btn" value="Ajouter" />
</form>

