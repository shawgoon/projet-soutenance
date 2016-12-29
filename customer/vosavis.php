<?php include('../header.php'); ?>

    <div class="hide">
      <h1>Votre avis nous intéresse</h1>
      <form class="" action="pageAvis.php" method="post">
        <div class="radio">
          <label class="face">&#9786;Vous êtes :</label>
          <ul>
            <label>Particulier</label>
            <li><input type="checkbox" name="" value="1">
            </li>
            <label>Professionnel</label>
            <li><input type="checkbox" name="" value="2">
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
<?php include('../footer.php'); ?>
