<?php include ('/header.php'); ?>


     <div class="hide">
       <form class="" action="destination.php" method="post">
         <label>Rue :</label><input type="text" name="" value=""><br>
         <label>Ville :</label><input type="text" name="" value=""><br>
         <label>Code Postal :</label><input type="text" name="" value=""><br>
         <input type="submit" name="" value="Envoyer">
       </form>
     </div>
     <?php
       include('/localisation.php');
      ?>
   </body>
 </html>
 <?php include('/footer.php'); ?>
