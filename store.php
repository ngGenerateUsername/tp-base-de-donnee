<?php
include 'bdconnexion.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$rep = $bdd->prepare("INSERT INTO students(firstname, lastname, email, phone) VALUES (:nom, :prenom,:email, :phone)");
$rep->bindParam(':nom',$nom);
$rep->bindParam(':prenom',$prenom);
$rep->bindParam(':email',$email);
$rep->bindParam(':phone',$phone);
$rep->execute();
header('Location:index.php');
?>
