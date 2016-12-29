<?php include ('/pdo.php'); ?>

<?php $connected = false;

if (isset($_POST['numberphone']) && isset($_POST['password'])) {

  $sql = "SELECT *
  FROM users
  WHERE numberphone = '".$_POST['numberphone']."'AND password = '".$_POST['password']."'";
  $user = $instance->query($sql)->fetch();

  if ($user) {
    $_SESSION['user'] = array(
      "userName" => $user['firstname'],
      "userId" => $user['id'],
      "grad" => $user['grad']
    );
    $connected = true;
}?>

  <?php if ($connected) { ?>
    <?php header('Location: http://localhost/projet-soutenance/customer/accueil.php'); //donner votre adresse de la page d'accueil
    exit();?>
  <?php } ?>
<?php } ?>
<?php if (!$connected) { ?>
  <?php
     header('Location: http://localhost/projet-soutenance/public/index.html'); // renseigner la bonne adresse d'hébergeur( localhost)
    exit();
  ?>
<?php } ?>
