<div class="container">

    <h2 class="b">Add to Cart</h2>
    <?php
    include "connection.php";
    ?>

    <?php
    if (isset($_POST["name"]) ||isset( $_POST["order"]) ||isset( $_POST["email"])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $order = $_POST['order'];


        $to = "mkpindura@gmail.com";
        $subject = "message";
        $body = "this is an automated message, please dont reply to this email. \n\n $order";

        mail($to, $subject, $body);



    }
    ?>



<br>
    <br>
</div>
<div class="one-half column">

    <form action="" method="POST">
        Name: <br><input type="text" name="name" value=""  style="width: 50%;" required><br>
        Email: <br><input type="email" name="email" value="" style="width: 50%;" required><br>
        Order: <br><textarea name="order" required></textarea><p>
            <input type="submit" name="submit" value="submit" class="btn btn-success" required>
    </form>
</div>




</div>