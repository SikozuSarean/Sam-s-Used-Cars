<?php
include "../Register/header.php";

include 'db.php';

$mysqli = $conn;
$mysqli->select_db("cars");

$vin = $_GET['VIN'];
$image = $_GET[''];
$query = "DELETE FROM IMAGES WHERE VIN='$vin' AND ImageFile='$image'";
echo "$query <BR>";
/* Try to query the database */
if ($result = $mysqli->query($query)) {
   Echo "The vehicle with VIN $vin and Image Name $image has been deleted from the database.";
}
else
{
    echo "Sorry, a vehicle with VIN of $vin cannot be found " . mysqli_error($mysqli)."<br>";
}

$mysqli->close();
   
?>

