<?php // echo $_SERVER['REQUEST_URI'];

  $url = $_SERVER['REQUEST_URI'];

  switch ($url) {
    case "/projet-soutenance-master/villes.php":
        $pageTitle = 'Villes';
        break;
    case "/projet-soutenance-master/pageAvis.php":
        $pageTitle = 'Votre avis compte';
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
