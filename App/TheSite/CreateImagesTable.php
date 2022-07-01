<?php

include "../Register/header.php";
include 'db.php';
$mysqli = $conn;
$mysqli->select_db("cars");
 Echo ("Selected the Cars database <br>");


$query = " CREATE TABLE IMAGES (ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT, VIN varchar(17), ImageFile varchar(250))";

if ($mysqli->query($query) === TRUE) 
{
    echo "Database table 'Images' created</P>";
}
else
{
    echo "<p>Error: " . mysqli_error($mysqli);
}
$mysqli->close();
?>

<p> <a href="../TheSite/AccessPage.php">AccessPage</a> </p>
