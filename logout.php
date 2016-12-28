<?php
<<<<<<< HEAD
include('header.php');

// On supprime la session, ce qui va déconnecter l'utilisateur.
unset($_SESSION['user']);

?>

    <h5>Utilisateur déconnecté !</h5>
    <a href="http://localhost/projet-soutenance">Retour à l'index</a>

<?php include('footer.php') ?>
=======
include('/pdo.php');

// On supprime la session, ce qui va déconnecter l'utilisateur
unset($_SESSION['user']);
 ?>
 <?php
    header('Location: http://localhost/projet-soutenance/index.html'); // renseigner la bonne adresse d'hébergeur( localhost)
   exit();
 ?>
>>>>>>> 61d1a9a8425d12b2b3e73dd110bf301ddb0af4e9
