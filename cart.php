<?php

$page = "Cart";
$title = "MY Cart page";

$metaD = "Welcome to my Cart page";
include 'includes/header.php';
include "connection.php";

$id = $_GET['product_id'];
$select_sequel = "SELECT * FROM products WHERE id = '$id'";
$result = mysqli_query($conn, $select_sequel);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) { ?>
        <body>
        <br>
        </br>

        <div class="responsive">
            <div class="gallery">
                <img src="img/<?php echo $row['id'] ?>.jpg" alt="">
                <div class="zoom-button large icon-expand tip-top hide-for-small" title="Zoom"></div>

                </a>
                <div class="desc">
                    <a href="cart.php?product_id=<?php echo $row['id'] ?>"><?php echo $row['name'], '</br>', 'R', $row['price'], '</br>', $row['description'] ?>
                    </a>
                </div>
            </div>
        </div>

        </body>


    <?php }


}

?>

<br>

<?php
include "description.php";
include "includes/footer.php";
?>