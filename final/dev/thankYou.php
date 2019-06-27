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
<h2>We thank you for filling out our contact form! In the coming business days, someone from <?php echo $busName ?> will reach out. </h2>

<?php
$to = $companyEmail;
$date = date("F j, Y, g:i a");
$subject = $busName;
$subject .= "\n";
$subject .= "Contact Form Submission";
$subject .= "\n";
$subject .= $date;
$message2 .= "Name: ";
$message2 .= $_POST["nameField"];
$message2 .= "\n";
$message2 .= "Email: ";
$message2 .= $_POST["emailField"];
$message2 .= "\n";
$message2 .= "Details: ";
$message2 .= $_POST["detailField"];
$message2 .= "\n";
$message2 .= "Date: ";
$message2 .= $_POST["datepicker"];
?>

<?php
mail($to, $subject, $message2);
?>
<?php
include ("footer.php")
?>