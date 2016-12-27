<?php
include('/pdo.php');

// On supprime la session, ce qui va déconnecter l'utilisateur
unset($_SESSION['user']);
 ?>
 <?php
    header('Location: http://localhost/projet-soutenance/index.html'); // renseigner la bonne adresse d'hébergeur( localhost)
   exit();
 ?>
