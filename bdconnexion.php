<?php 
try {
    $bdd = new PDO('mysql:host=localhost;dbname=dsi2x_g1_2019;charset=utf8', 'root', ''); 
   } catch (Exception $e) { 
       die('Erreur : ' . $e->getMessage()); 
   }
   ?> 