<!DOCTYPE html>

<html>

<head>

    <meta name="description" content="<?php
    //gives each link on the page its unique name
    if (isset($metaD) && !empty($metaD)) {
        echo $metaD;
    } else {
        echo "Some meta description";
    } ?>"/>


    <title><?php if (isset($title) && !empty($title)) {
            echo $title;
        } else {
            echo "Default title tag";
        } ?></title>
    <!--containing each and every link-->
    <link rel="stylesheet" href="style/style.css" type="text/css"/>
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/skeleton.css" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="jquery/jquery.js" type="text/javascript"></script>

</head>

<body>
<header>
    <!--nav bar containing the links-->
    <nav>

        <ul>

            <li><a href="index.php">Home</a></li>

            <li style="float: right"><a href="about.php">About</a></li>


            <li style="float: right"><a href="contact.php">contact</a></li>

            <li><a href="shop.php">Shop</a></li>




        </ul>


    </nav>

</header>

<div class="container">
    <div class="row">
        <div class="column twelve">