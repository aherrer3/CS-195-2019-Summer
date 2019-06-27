<?php
include ("top.php")
?> 
<li class="nav-item">
    <a class="nav-link" href="index.php"><?php echo $navPage1 ?>
        <span class="sr-only">(current)</span>
    </a>
</li>
<li class="nav-item active">
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
<h1 class="text-center">
    <?php echo $navPage2 ?>
</h1>
<div class="row">
    <div class="col-12 col-md-8">
        <h1 class="about-me">
                Hi, welcome to Nova Ink VT! My name is Alexa, and this is my newly launched tattoo business. I am based out of Brandon, VT and work with clients to create personalized and unique images.
        </h1>
    </div>
    <div class="col-6 col-md-4">
        <img class="img-responsive" src="images/logo1.png" alt="Logo" width="460" height="345"> 


    </div>
</div>
<?php
include ("footer.php")
?>