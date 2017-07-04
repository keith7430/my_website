<?php

$page = "contact";
$title = "My Contact page";

$metaD = "Welcome to my Contact page";
include 'includes/header.php';
include "connection.php";

?>


<div class="container">

    <h1 class="b">Contact Us</h1>

    <?php


    if (isset($_POST['name']) ||isset($_POST['email'] ) ||isset( $_POST['message']) ){
        //insert a new enquiries info in the table


        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];


        $insert_query = "INSERT INTO  customers(name, email, message) VALUES ('$name','$email','$message')";
        $result = mysqli_query($conn, $insert_query);

    }
    ?>


</div>
<div class="one-half column">


    <div id="cc-m-5530606413" class="j-module n j-text "><p>
        <p>
            <strong><span style="color: black ;">Contact us on: <span
                            style="color: black;">062 104 3166</span></span></strong>
        </p>
        <p>
            <strong><span style="color: black ;">Email us on: <span
                            style="color: black;">mkpindura@gmail.com</span></span></strong>
        </p>


        <p>
            <span style="color: black ;"><strong>Send Us an Email </strong></span>
        </p></div>
    <div id="cc-m-5662142713" class="j-module n j-formnew ">

        <form action="" method="POST">

            <div class="cc-m-form-loading"></div>

            <form class="cc-m-form-view-sortable">
                <div class="cc-m-form-view-element cc-m-form-text " data-action="element">

                    <label for="m904f093f8f22fda00">
                        <div>Name</div>
                    </label>
                    <div class="cc-m-form-view-input-wrapper">
                        <input type="text" name="name" value="" style="width: 50%;" required/>
                    </div>

                </div>

                <div class="cc-m-form-view-element cc-m-form-email cc-m-required" data-action="element">
                    <label for="m904f093f8f22fda01">
                        <div>Email Address</div>
                    </label>
                    <div class="cc-m-form-view-input-wrapper">
                        <input type="email" autocorrect="off" autocapitalize="off" name="email" value=""
                               style="width: 50%;" id="m904f093f8f22fda01" required/>
                    </div>
                </div>

                <div class="cc-m-form-view-element cc-m-form-textarea cc-m-required" data-action="element">
                    <label for="m904f093f8f22fda02">
                        <div>Message</div>
                    </label>
                    <div class="cc-m-form-view-input-wrapper">
                        <textarea name="message" rows="6" style="width: 100%;" required></textarea>
                    </div>

                </div>

    </div>
    <input type="submit" class="btn btn-success" name="submit" value="Submit">
    </form>
</div>

<!--</div>-->

<br>

<div class="responsive">
    <div class="contact">
        <a target="_blank" href="img">
            <img src="img/5.jpg" alt="">
        </a>
    </div>
</div>


<?php

include 'includes/footer.php';

?>

