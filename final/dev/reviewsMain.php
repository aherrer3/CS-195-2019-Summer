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
<li class="nav-item ">
    <a class="nav-link" href="gallery.php"><?php echo $navPage3 ?></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="contact.php"><?php echo $navPage4 ?></a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="reviewsMain.php"><?php echo $navPage5 ?></a>
</li>
</ul>
</div>
</div>
</nav>


<div class="container">
    <div class="row">
        <div class="col-6">
            <p>Table</p>
        </div>
        <div class="col">
            <h1>Enter a New Review</h1>
            <p>As a new business, your feedback matters to us. Please enter a new review below</p>
            <?php
            include("reviewsForm.php")
            ?>
        </div>
    </div>
</div>