<?php
include ("top.php")
?> 
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
<li class="nav-item ">
    <a class="nav-link" href="gallery.php"><?php echo $navPage3 ?></a>
</li>
<li class="nav-item active">
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
    <?php echo $navPage4 ?>
</h1>
<div class="row">
    <div class="col-sm-4"> 
        <h2>Please contact us. Your business is greatly appreciated, thank you!</h2>
        <h3>Just use button to reveal the form</h3>
        </div>
    <div class="col-sm-8">
        
        <script src="js/toggleForm.js"></script>

        <button class="open-button" onclick="openForm()">Open Form</button>

        <div class="form-popup" id="contactForm">

            <div class="form-group">
                <label for="nameField">Name:</label>
                <input type="text" class="form-control" id="nameField">
            </div>
            <div class="form-group">
                <label for="emailField">Email Address:</label>
                <input type="email" class="form-control" id="emailField" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="detailsField">Details:</label>
                <textarea class="form-control"></textarea>
            </div>
            <script src="js/calDisplay.js"></script>

             <div class="form-group">
                <label for="dateField">Details:</label>
                <input type="text" id="datepicker"></textarea>
            </div>

            <button type="submit" class="btn">Login</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </div>
    </div>
    
</div>
<?php
include ("footer.php")
?>