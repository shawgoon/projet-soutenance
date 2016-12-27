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
  }?>
