<h1>Enter a New Review</h1>
<p>As a new business, your feedback matters to us. Please enter a new review below</p>



<link rel="stylesheet" type="text/css" href="css/form.css">
<form name="myForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label> Comment: <textarea rows="4" cols="50" name="comment"></textarea>
    </label>
    <input type="hidden" value="Submit">

</form>
<button onclick="myFunction()">Submit</button>