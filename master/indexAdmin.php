<?php include('/header.php'); ?>

<?php if (!is_admin()) {die('<h4>Vous n\'avez pas les droits pour accéder à cette page</h4>');}; ?>

<a href="table.php"><span class="glyphicon glyphicon-user"></span> Gestion des grades</a>
<a href="formArticle/articletable.php"><span class="glyphicon glyphicon-tags"></span> Gestion des comptes clients</a>
<a href="customer/accueil.php"><span class="glyphicon glyphicon-shopping-cart"></span> Retour à l'accueil</a>


<?php include('/footer.php'); ?>
