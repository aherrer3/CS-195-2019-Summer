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
<script src="js/contactFormValidation.js"></script>

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
            <form name="contactForm1" action="thankYou.php"  method="post" onsubmit="return validateForm()">

                <div class="form-group">
                    <label for="nameField" id="nameFieldLabel">Name:</label>
                    <input type="text" class="form-control" name = "nameField" id="nameField" required>
                </div>
                <div class="form-group">
                    <label for="emailField" id="emailFieldLabel">Email Address:</label>
                    <input type="email" class="form-control" name = "emailField" id="emailField" placeholder="name@example.com" required>
                </div>
                <div class="form-group">
                    <label for="detailsField" id="detailsFieldLabel">Details:</label>
                    <textarea class="form-control" name = "detailField" id = "detailsField"></textarea>
                </div>
                <script src="js/calDisplay.js"></script>

                <div class="form-group">
                    <label for="datepicker" id="dateFieldLabel">Date:</label>
                    <input type="text" name ="datepicker" id="datepicker">
                </div>

                <button type="submit" class="btn">Submit</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>
    </div>

</div>
<?php
include ("footer.php")
?>