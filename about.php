<?php

$page = "about";
$title = "My About page";

$metaD = "Welcome to my About page";
include "includes/header.php";

?>

<!--variable names can be whatever you decide-->
<div class="twelve column">

    <h1 class="j">About Us</h1>

    <p>The millennial and contemporary Vanz Vintage Shop collaborates with emerging Vintage Stores and
        explores different forms of insight that extends beyond “high art” into popular culture.
        We feature bold, imaginative, and outstanding designs from South Africa and the African continent who use old
        vintage media such as custom painting and photography in new and exciting ways, not afraid to take risks and
        challenge established expectations.
        We believe in art that is stimulating, innovative and of course, beautiful. Our product speaks to the viewer and
        through the works our designers will continue to have a conversation with the viewer for years to come.
        Be it high cut , low cut or sublime, we present products that we believe is worth your attention and spending.

    </p>

    </br>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="img">
                <img src="img/20.jpg" alt="">
            </a>
            <div class="desc"> the mixed colours which bring out the artistic culture</div>
        </div>
    </div>


    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="img">
                <img src="img/14.jpg" alt="">
            </a>
            <div class="desc"> the high and low cut design from our best artist</div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="img">
                <img src="img/14.jpg" alt="">
            </a>
            <div class="desc">The red foundation of designs for the savage elite ones</div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="img">
                <img src="img/15.jpg" alt="">
            </a>
            <div class="desc">the green camouflage catches the eye</div>
        </div>
    </div>
</div>


<?php

include 'includes/footer.php';

?>

