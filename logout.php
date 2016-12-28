<?php
include('header.php');

// On supprime la session, ce qui va déconnecter l'utilisateur.
unset($_SESSION['user']);

?>

    <h5>Utilisateur déconnecté !</h5>
    <a href="http://localhost/projet-soutenance">Retour à l'index</a>

<?php include('footer.php') ?>
