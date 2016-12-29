<?php include('header.php') ?>

<!-- Style de la map -->
<style type="text/css">
    #map { width:500px; height: 400px; }
</style>


    <p>Appuyez sur le bouton pour obtenir votre localisation actuelle</p>
    <!-- <form method="POST" name="ajax" action=""> -->
      <button id="localisation">Localisation</button>
    <!-- </form> -->

    <!-- la map google -->
    <div id="map"></div>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2VTy4CLUElPDtIUEFmH3c_Yb_XNNsJ5w&callback=initMap"></script>

<?php include('footer.php')  ?>
