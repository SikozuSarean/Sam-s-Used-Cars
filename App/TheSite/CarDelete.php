<html>
<head>
<title>Sam's Used Cars</title>
</head>

<body>

<h1>Sam's Used Cars</h1>

<p> <a href="../TheSite/AllCarsView.php">View all cars</a> </p>

<?php
include "../Register/header.php";

include 'db.php';

$mysqli = $conn;
$mysqli->select_db("cars");

$vin = $_GET['VIN'];
$query = "DELETE FROM inventory WHERE VIN='$vin'";
echo "$query <BR>";
/* Try to query the database */
if ($result = $mysqli->query($query)) {
   Echo "The vehicle with VIN $vin has been deleted.";
}
else
{
    echo "Sorry, a vehicle with VIN of $vin cannot be found " . mysqli_error($mysqli)."<br>";
}

$mysqli->close();
   
?>

</body>

</html>
