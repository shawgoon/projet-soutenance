<?php include ('../header.php'); ?>
<?php if (is_admin()) { ?>
<div class="hide">
    <form class="" action="indexAdmin.php" method="post">
      <label for="">Manager only</label>
      <input  class="admin" type="submit" name="" value="Manage Users">
    </form>
    <?php } ?>
  </div>
  <nav>
    <a href="vosavis.php">Laissez un avis</a>
  </nav>
  <main>
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
  </main>
<?php include ('../footer.php'); ?>
