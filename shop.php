<?php

$page = "Shop";
$title = "My Shop page";

$metaD = "Welcome to my Shop page";
include 'includes/header.php';
include 'connection.php';

?>

<!--variable names can be whatever you decide-->
<body>


<h2 class="c">Top Selling Vintage Vanz</h2>

<?php
//$id = $_GET['id'];
$select_sequel = "SELECT * FROM products";
$result = mysqli_query($conn, $select_sequel);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="responsive">
            <div class="gallery">
                <img src="img/<?php echo $row['id'] ?>.jpg " alt="">
                <div class="zoom-button large icon-expand tip-top hide-for-small" title="Zoom"></div>

                </a>
                <div class="desc"><a
                            href="cart.php?product_id=<?php echo $row['id'] ?>"><?php echo $row['name'], '</br>', 'R', $row['price'] ?>
                </div>
            </div>
        </div>
    <?php }
}

?>

</body>


<?php

include 'includes/footer.php';

?>

