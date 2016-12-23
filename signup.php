<?php
include ('/pdo.php');
$user = array(
  "userName" => "",
  "firstName" => "",
  "email" => "",
  "password" => ""
);

// Création de la requête
$sql = "SELECT * FROM users";
$users = $instance->query($sql)->fetchAll();

// on crée un utilisateur

if (isset($_POST['createUser'])){
  $nom = ($_POST['userName']);
  $prenom = ($_POST['firstName']);
  $email = ($_POST['email']);
  $password = ($_POST['password']);
  $sql = "INSERT INTO users (name, firstname, email, password) VALUES (?, ?, ?, ?)";
  $createSuccess = $instance->prepare($sql);
  $createSuccess -> execute(array($nom, $prenom, $email, $password));

  if($createSuccess){
    ?><h1>Bonjour <?php echo $_POST['firstName'] ?></h1>
    <p class="inscription">ton inscription est bien prise en compte</p>
    <p class="inscription">Tu peux maintenant te connecter avec tes identifiants</p>
    <p class="inscription"><a href="index.html">retour à la page d'accueil</a></p>
    <?php
     }
  }?>
