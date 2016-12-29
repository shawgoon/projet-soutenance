<?php // echo $_SERVER['REQUEST_URI'];

  // Session start
  session_start();

  function is_log() {
    if (isset($_SESSION['user'])){
      $isConnected = true;
    }

  }


  $url = $_SERVER['REQUEST_URI'];

  switch ($url) {
    case "/projet-soutenance/villes.php":
        $pageTitle = 'Villes';
        break;
    case "/projet-soutenance/pageAvis.php":
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
    <script src="static/js/gmap_localisation.js"></script>
    <title><?php echo $pageTitle ?></title>
  </head>
  <body>
    <header>
      <div class="title">
        Les Taxis
      </div>
      <div class="minititle">
        <?php if (isset($isConnected)){ ?>
          <a href="logout.php">Déconnexion</a>
        <?php }else { ?>
          <a href="#">Tutu</a>
        <?php } ?>
      </div>
    </header>
