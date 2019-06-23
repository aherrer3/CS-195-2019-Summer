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


<div class="reviewcontainer">
    <div class="row">
        <div class="col-6">
            <h1>Existing Customer Reviews</h1>
            <p>If you are a past customer, please consider adding one of the right, thank you</p> 

            <ul id="existingReviews">

                <li class = "hide"> Filler Review, Doesn't Count, Fake Review</li>

            </ul>
            <script>
                var revcount = $("#existingReviews").children().length;
            </script>    

<!--            <script>
     document.getElementById("existingReviews").innerHTML = revcount;

     </script>-->
            <script>
                function myFunction() {
                    var revCom = document.forms["myForm"]["comment"].value;
                    var d = new Date();
                    if (revCom !== "") {
                        var node = document.createElement("LI");
                        var textnode = document.createTextNode(d + ": "+ revCom);
                        node.appendChild(textnode);
                        document.getElementById("existingReviews").appendChild(node);
                    }
                    else{
                         alert("Comment must be filled out");
            return false;
        }
                    }
               
            </script>
        </div>
        <div class="col">
            <h1>Enter a New Review</h1>
            <p>As a new business, your feedback matters to us. Please enter a new review below</p>



            <link rel="stylesheet" type="text/css" href="css/form.css">
            </head>
            <body>
                <form name="myForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <label> Comment: <textarea rows="4" cols="50" name="comment"></textarea>
                    </label>
                    <input type="hidden" value="Submit">

                </form>
                <button onclick="myFunction()">Submit</button>


        </div>
    </div>
</div>

<?php
include ("footer.php")
?>