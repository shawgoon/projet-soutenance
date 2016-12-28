<?php include ('../pdo'); ?>
<?php include ('../header.php'); ?>
    <nav>
      <ul>
        <li>
          <a href="#">Particuliers</a>
        </li>
        <li>
          <a href="#">Professionnels</a>
        </li>
        <li>
          <a href="../villes/villes.php">Nos villes</a>
        </li>
        <li>
          <a href="#">Nous recrutons</a>
        </li>
      </ul>
    </nav>
    <div class="img">
      <img src="img/1.jpg" alt="">
      <img src="img/2.jpg" alt="">
      <img src="img/3.jpg" alt="">
    </div>
    <main>
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
    </main>
    <?php include ('../footer.php'); ?>
