<?php require __dir__.'/startSession.php'; var_dump($_SESSION['user']);?>

<?php
  $url = $_SERVER['REQUEST_URI'];

  switch ($url) {
    case "/projet-soutenance/customer/accueil.php":
    $pageTitle = 'accueil';
    break;
    case "/projet-soutenance/customer/vosavis.php":
    $pageTitle = 'Votre avis compte';
    break;
    case "/projet-soutenance/master/indexAdmin.php":
        $pageTitle = 'administration';
        break;
    case "/projet-soutenance/master/table.php":
        $pageTitle = 'gestion clients';
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
      <a href="accueil.php">Les Taxis</a>
      </div>
      <div class="minititle">
        <span class="session">Bonjour, <?php //echo $_SESSION['user']['userName']; ?></span><br>
         <a class="logout" href="../logout.php">Déconnexion</a>
       </div>
    </header>
