<?php
include ("top.php")
?> 
<li class="nav-item">
    <a class="nav-link" href="index.php"><?php echo $navPage1 ?>
        <span class="sr-only">(current)</span>
    </a>
</li>
<li class="nav-item ">
    <a class="nav-link" href="aboutUs.php"><?php echo $navPage2 ?></a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="locations.php"><?php echo $navPage6 ?></a>
</li>
<li class="nav-item ">
    <a class="nav-link" href="gallery.php"><?php echo $navPage3 ?></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="contact.php"><?php echo $navPage4 ?></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="reviewsMain.php"><?php echo $navPage5 ?></a>
</li>
</ul>
</div>
</div>
</nav>
<h1 class="text-center">
    <?php echo $navPage6 ?>
</h1>
<!--Code from the official Google JS API site 
(https://developers.google.com/maps/documentation/javascript/examples/marker-simple)-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBD_Mw7DdobPhDZC00Cw76MaL83QJF-QBs"></script>

<script>
    var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    var labelIndex = 0;

    function initialize() {
        var CenterLocal = {lat: <?php echo $loc1LAT ?>, lng: <?php echo $loc1LNG ?>};

        var map = new google.maps.Map(document.getElementById('map'), {

            zoom: 35,
            center: CenterLocal
        });
        // Add a marker at the center of the map.
        addMarker(CenterLocal, map);
    }
// Adds a marker to the map.
    function addMarker(location, map) {
        // Add the marker at the clicked location, and add the next-available label
        // from the array of alphabetical characters.
        var marker = new google.maps.Marker({
            position: location,
            label: labels[labelIndex++ % labels.length],
            map: map
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div id="map"></div>
<?php
include ("footer.php")
?>