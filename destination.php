<?php include('../header.php'); ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <title></title>
   </head>
   <body>
     <form class="" action="destination.php" method="post">
       <label>Rue :</label><input type="text" name="" value=""><br>
       <label>Ville :</label><input type="text" name="" value=""><br>
       <label>Code Postal :</label><input type="text" name="" value=""><br>
       <input type="submit" name="" value="Envoyer">
     </form>
     <?php
       include('../localisation.php');
      ?>
   </body>
 </html>
 <?php include('../footer.php'); ?>
