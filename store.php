<?php
include 'classe/etudiant.class.php';

$e=new Etudiant;
$e->insert($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['phone']);

header('Location:index.php');
?>
