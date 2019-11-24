<?php
    include 'classe/etudiant.class.php';
    $id = $_POST['id'];
    $firstname = $_POST['nom'];
    $lastname = $_POST['prenom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $e=new Etudiant;
    $e->update($id,$firstname,$lastname,$email,$phone);
    header('Location:index.php');
?>