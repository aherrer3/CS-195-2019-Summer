
function myFunction() {
    var revCom = document.forms["myForm"]["comment"].value;
    var d = new Date();
    if (revCom !== "") {
        var node = document.createElement("LI");
        var textnode = document.createTextNode(d + ": " + revCom);
        node.appendChild(textnode);
        document.getElementById("existingReviews").appendChild(node);
    } else {
        alert("Comment must be filled out");
        return false;
    }
}



