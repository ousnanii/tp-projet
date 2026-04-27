<?php
require 'config.php';

if(isset($_POST['btn'])){

    $id = $_GET['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $filiere_id = $_POST['filiere_id'];

    $db->query("UPDATE etudiants 
                SET nom='$nom', prenom='$prenom', filiere_id='$filiere_id' 
                WHERE id='$id'");

    header("Location: index.php");
}
?>
