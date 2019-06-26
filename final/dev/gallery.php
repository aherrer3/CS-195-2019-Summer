<?php
include ("top.php")
?> 
<li class="nav-item">
    <a class="nav-link" href="index.php"><?php echo $navPage1 ?>
        <span class="sr-only">(current)</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="aboutUs.php"><?php echo $navPage2 ?></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="locations.php"><?php echo $navPage6 ?></a>
</li>
<li class="nav-item active">
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
<div class="container-fluid">
    <div class="row"> 
  <div class="column">
    <img src="images/gal1.jpeg" style="width:100%">
    <img src="images/gal2.jpeg" style="width:100%">
    <img src="images/gal3.jpeg" style="width:100%">
    <img src="images/gal4.jpeg" style="width:100%">
    <img src="images/gal5.jpeg" style="width:100%">
    <img src="images/gal11.jpeg" style="width:100%">

  </div>
  <div class="column">
    
    <img src="images/gal6.jpeg" style="width:100%">
    <img src="images/gal7.jpeg" style="width:100%">
    <img src="images/gal8.jpeg" style="width:100%">
     <img src="images/gal9.jpeg" style="width:100%">
     <img src="images/gal10.jpg" style="width:100%">
     <img src="images/gal12.jpeg" style="width:100%">

  </div> 
</div>
    <script type="text/javascript" src="js/gallery.js"></script>
    </div>
<?php
include ("footer.php")
?>