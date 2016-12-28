<?php
include ('/pdo.php');
$user = array(
  "userName" => "",
  "firstName" => "",
  "numberPhone" => "",
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
  $phone = ($_POST['numberphone']);
  $email = ($_POST['email']);
  $password = ($_POST['password']);
  $sql = "INSERT INTO users (name, firstname, numberphone, email, password) VALUES (?, ?, ?, ?, ?)";
  $createSuccess = $instance->prepare($sql);
  $createSuccess -> execute(array($nom, $prenom, $phone, $email, $password));

  if($createSuccess){
    ?><h1>Bienvenu <?php echo $_POST['firstName'] ?></h1>
    <p class="inscription">Votre inscription est bien prise en compte</p>
    <p class="inscription">Vous pouvez maintenant vous connecter avec vos identifiants</p>
    <!-- formulaire de connection après une inscription -->
    <div id="formLogin" class="hide">
      <h2>Login</h2>
      <form class="" action="login.php" method="post">
        <p><label for="">Votre identifiant</label><br>
          <input required="required" type="text" name="numberphone" placeholder="Votre numéro de portable"></p>
          <p><label for="">Votre mot de passe</label><br>
            <input required="required" type="password" name="password" placeholder="Votre nom de passe"></p>
          <p><input type="hidden" name="userId" value="">
          <input type="submit" name="userName" value="connexion"></p>
        </form>
      </div>
    <?php
     }
  }?>
