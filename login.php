<?php include ('/pdo.php'); ?>

<?php $connected = false;

if (isset($_POST['email']) && isset($_POST['password'])) {

  $sql = "SELECT *
  FROM user
  WHERE email = '".$_POST['email']."'AND password = '".$_POST['password']."'";
  $user = $instance->query($sql)->fetch();

  if ($user) {
    $_SESSION['user'] = array(
      "userName" => $user['firstName'],
      "userId" => $user['id']
    );
    $connected = true;
    $message = "Connecté !";
  } else {
    $message = "identifiants incorrect !";
  }
}?>

<div class="">
<?php if (isset($message)) { ?>
  <p><?php echo $message ?></p>
  <?php if ($connected) { ?>
    <?php header('Location: http://localhost/projet-soutenance/accueil.php'); //donner votre adresse de la page d'accueil
    exit();?>
  <?php } ?>
<?php } ?>
<?php if (!$connected) { ?>
  <?php
     header('Location: http://localhost/projet-soutenance/login.php'); // renseigner la bonne adresse d'hébergeur( localhost)
    exit();
  ?>
<?php } ?>
