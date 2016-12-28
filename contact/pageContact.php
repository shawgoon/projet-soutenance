<?php
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
    <form action="pageContact.php" method="post">
      <label>Sujet :<span class="star">*</span> </label><select name="sujet">
        <option value="Devis">Devis</option>
        <option value="Renseignements">Renseignements</option>
        <option value="Autre">Autre</option>
      </select><br>
      <label>Société : </label><input type="text" name="" value="" placeholder="Société"><br>
      <label>Nom :<span class="star">*</span> </label><input type="text" name="" value="" placeholder="Prénom"><br>
      <label>Prénom :<span class="star">*</span> </label><input type="text" name="" value="" placeholder="Nom"><br>
      <label>Email :<span class="star">*</span> </label><input type="email" name="" value="" placeholder="Email"><br>
      <label>Téléphone : </label><input type="number" name="" value="" placeholder="Téléphone"><br>
      <label>Message :<span class="star">*</span> </label><textarea name="name" rows="8" cols="50" placeholder="Message"></textarea><br>
      <input type="submit" name="" value="Envoyer">
        <p>Les champs suivis d'un <span class="star">*</span> sont obligatoires</p>
    </form>
<?php
  include('footer.php');
 ?>
