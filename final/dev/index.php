<?php
include ("top.php")
?> 
<li class="nav-item active">
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

<div class="jumbotron">
    <div class="container text-center">
        <h1> <?php echo $busName ?> </h1>   
        <?php echo $homeBase ?>
        <p>Welcome to the official website of my newly launched tattoo business</p>
    </div>
    <h2>Prices List</h2>
    <h3><strong>Consultation:</strong> $25/hr</h3>
    <h3><strong>Tattoos:</strong> $50/hr</h3>
</div>


<?php
include ("footer.php")
?>