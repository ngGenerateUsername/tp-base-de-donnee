<?php
include 'bdconnexion.php';
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$rep = $bdd->prepare("INSERT INTO students(firstname, lastname, email, phone) VALUES ('$nom','$prenom','$email','$phone')");
$rep->execute();
require 'create.php';
?>
