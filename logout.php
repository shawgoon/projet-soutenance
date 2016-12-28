<?php
include('pdo.php');

// On supprime la session, ce qui va déconnecter l'utilisateur.
unset($_SESSION['user']);
?>

<?php include('footer.php') ?>

 <?php
    header('Location: http://localhost/projet-soutenance/index.html'); // renseigner la bonne adresse d'hébergeur( localhost)
   exit();
 ?>
