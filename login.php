<?php include ('/pdo.php'); ?>

<?php $connected = false;

if (isset($_POST['numberphone']) && isset($_POST['password'])) {

  $sql = "SELECT *
  FROM user
  WHERE numberphone = '".$_POST['numberphone']."'AND password = '".$_POST['password']."'";
  $user = $instance->query($sql)->fetch();

  if ($user) {
    $_SESSION['user'] = array(
      "userName" => $user['firstName'],
      "userId" => $user['id']
    );
    $connected = true;
    
}?>

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
