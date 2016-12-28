<?php // echo $_SERVER['REQUEST_URI'];

  $url = $_SERVER['REQUEST_URI'];

  switch ($url) {
    case "/projet-soutenance/villes/villes.php":
        $pageTitle = 'Villes';
        break;
    case "/projet-soutenance/avis/pageAvis.php":
        $pageTitle = 'Votre avis compte';
        break;
    case "/projet-soutenance/accueil.php":
        $pageTitle = 'accueil';
        break;
    case "/projet-soutenance/contact/pageContact.php":
        $pageTitle = 'nous contacter';
        break;
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $pageTitle ?></title>
  </head>
  <body>
    <header>
      <div class="title">
        Les Taxis
      </div>
      <div class="minititle">
        <a href="#">Inscription</a>
        <a href="#">Connexion</a>
      </div>
    </header>
