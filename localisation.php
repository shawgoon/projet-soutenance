<?php include('header.php') ?>
<p>Appuyez sur le bouton pour obtenir votre localisation actuelle</p>

<button onclick="getLocation()">Localisation</button>

<!-- <p id="demo"></p> -->

<script>
// var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    // x.innerHTML = "Latitude: " + position.coords.latitude +
    // "<br>Longitude: " + position.coords.longitude;
}
</script>

<?php include('footer.php')  ?>
