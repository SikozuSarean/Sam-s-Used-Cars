<?php


$conn = new mysqli('localhost', 'cars', 'a' );
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//$conn->select_db("registration");
?>