<?php
/**
 * User: localhost
 * Date:
 * Time: 10:29 AM
 */

$servername = "localhost:8889";
$username = "root";
$password = "root";

$dbname = "my_website";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}