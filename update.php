<?php
    include 'bdconnexion.php';
    $id = $_POST['id'];
    $firstname = $_POST['nom'];
    $lastname = $_POST['prenom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $rep=$bdd->prepare("UPDATE students SET firstname ='$firstname', lastname = '$lastname', email = '$email', phone = '$phone ' WHERE id = '$id'");
    $rep->execute();
    header('Location:index.php');
?>