function validateForm() {
    var nameVal = document.forms["contactForm"]["nameField"].value;
    var emailVal = document.forms["contactForm"]["emailField"].value;

    if (nameVal === "" || emailVal === "") {
        alert("It appears you forgot an important field in your submssion. Please verify your form submission and try again.");
        return false
    }

}
