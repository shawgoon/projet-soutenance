<?php
// include ('../pdo.php');
  include('../header.php');
 ?>
  <body>
    <h1>Nous contacter</h1>
    <div class="inf">
      <h2>Taxi Dieppe</h2>
      <p>15 rue machin</p>
      <p>76 200 - Dieppe</p>
      <p>Service commercial : <br>
        Tel : 02 16 85 79 10 <br>
        Fax : 02 16 85 79 15
      </p>
      <p>Du lundi au vendredi <br>
        8h-12h/14h-18h
      </p>
    </div>
    <div class="hide">
      <form action="pageContact.php" method="post">
        <label>Sujet :<span class="star">*</span> </label><select name="sujet">
          <option value="Devis">Devis</option>
          <option value="Renseignements">Renseignements</option>
          <option value="Autre">Autre</option>
        </select><br>
        <label>Société : </label><input type="text" name="" value="" placeholder="Société"><br>
        <label>Nom :<span class="star">*</span> </label><input type="text" name="" value="" placeholder="Nom"><br>
        <label>Prénom :<span class="star">*</span> </label><input type="text" name="" value="" placeholder="Prénom"><br>
        <label>Email :<span class="star">*</span> </label><input type="text" name="" value="" placeholder="Email"><br>
        <label>Téléphone : </label><input type="text" name="" value="" placeholder="Téléphone"><br>
        <label>Message :<span class="star">*</span> </label><textarea name="name" rows="4" placeholder="Message"></textarea><br>
        <input type="submit" name="" value="Envoyer">
          <p>Les champs suivis d'un <span class="star">*</span> sont obligatoires</p>
      </form>
    </div>
    <div class="hide">
      <h1>Votre avis nous intéresse</h1>
      <form class="avis" action="pageAvis.php" method="post">
        <div class="radio">
          <label class="face">&#9786;Vous êtes :</label>
          <ul>
            <li><input type="button" name="" value="" data-form="ParticularForm">
              <label>Particulier</label>
            </li>
            <li><input type="button" name="" value="">
              <label>Professionnel</label>
            </li>
          </ul>
        </div>
        <hr>
        <div class="form">
          <label class="inf">&#9998;Informations :</label><br>
          <form class="infos" action="pageAvis.php" method="post">
            <input type="text" name="" value="" placeholder="Nom*"><br>
            <input type="text" name="" value="" placeholder="Prénom*"><br>
            <input type="number" name="" value="" placeholder="Téléphone*"><br>
            <input type="email" name="" value="" placeholder="Email*"><br>
            <textarea placeholder="Message*"></textarea><br>
            <input class="button" type="button" name="" value="Envoyer">
          </form>
          <p>*Champs devant obligatoirement être renseignés</p>
        </div>
      </form>
    </div>
<?php
  include('../footer.php');
 ?>
