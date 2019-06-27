<!DOCTYPE HTML>
<html lang="en">
    <?php
    $myFullName = "Alexa Herrera Condry";
    $busName = "Nova Ink VT";
    $navPage1 = "Home";
    $navPage2 = "About";
    $navPage3 = "Gallery";
    $navPage4 = "Contact Me";
    $navPage5 = "Customer Reviews";
    $navPage6 = "Location";
    $loc1LAT = 43.8338575;
    $loc1LNG = -73.0554767;
    $homeBase = "Brandon, VT";
    $companyEmail = "NovaInkVT@gmail.com";
    ?>

    <head>
        <title><?php echo $busName ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1.0">
        <meta name="author" content="Alexa Herrera Condry">
        <meta name="description" content="CS 195 Final Project">



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link rel="icon" href="images/favicon/icons/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>     
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/logo1.png" width="50" height="50" class="d-inline-block" alt="Nav Bar image" id="logoImageNavBar">
                    <?php echo $busName ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
