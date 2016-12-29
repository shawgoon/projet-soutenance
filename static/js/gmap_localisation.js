window.onload = function(){

  // On masque la map dès le départ car pas utile au lancement de page puisque les données GPS n'ont pas été récupérées
  var mapContainer = document.getElementById('map');
  mapContainer.style.display="none";

  // On déclare nos variables pour quels soient accesibles partout dans le code
  var lati;
  var long;

  // Bouton localisation
  var GPSButton = document.getElementById('localisation');

  if (GPSButton) {
    GPSButton.addEventListener('click', function(){
      getLocation();
    });
  }

  // permet de récupérer la position en long et lat
  function getLocation() {
      if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition);
      } else {
          body.innerHTML = "Geolocation is not supported by this browser.";
      }
  }

  function showPosition(position) {
      // On affecte les valeurs GPS aux 2 variables déclarées en début de code
      long = position.coords.longitude;
      lati = position.coords.latitude;
      // puis on lance la fonction d'affichage de la map
      initMap();
  }

  // Cette variable correspond à l'objet google maps
  var map;

  function initMap() {
    mapContainer.style.display="block";
    // Create a map object and specify the DOM element for display.
    map = new google.maps.Map(document.getElementById('map'), {
      center:{lat: lati,lng: long},
      scrollwheel: true,
      zoom: 15
    });

    var localisationGPS = {lat: lati, lng : long};

    var positionUser = new google.maps.Marker({
    position: localisationGPS,
    map: map,
    title: 'Vous êtes ici'
  });

  }








}
