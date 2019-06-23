<link rel="stylesheet" type="text/css" href="css/form.css">
<script>
    function validateForm() {
        var x = document.forms["myForm"]["sub"].value;
        if (x == "") {
            alert("Subject must be filled out");
            return false;
        }
        var y = document.forms["myForm"]["comment"].value;
        if (y == "Enter text here...") {
            alert("Comment must be filled out");
            return false;
        }
    }
</script>
</head>
<body>

    <form name="myForm" action="<?php echo $_SERVER['PHP_SELF']; ?>"  onsubmit="return validateForm()" method="post">
        <label> Subject: <input type="text" name="sub"></label>
        <label> Comment: <textarea rows="4" cols="50" name="comment">
Enter text here...</textarea>
        </label>
        <input type="submit" value="Submit">
    </form>