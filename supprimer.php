<?php
include 'classe/etudiant.class.php';
$e=new Etudiant;
$e->delete($_GET['id']);
header('location:index.php');


?>