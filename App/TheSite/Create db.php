<?php
include "../Register/header.php";

/**
 * Joy of PHP sample code
 * Demonstrates how to create a database, create a table, and insert records.
 */
include "db.php";
$mysqli = $conn;

   if (!$mysqli) { 
      die('Could not connect'); 
  } 
  echo 'Connected successfully to mySQL. <BR>'; 
  
// Create database
// $sql = "CREATE DATABASE cars";
// if ($mysqli->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $mysqli->error;
// }

 $mysqli->select_db("cars");
   Echo ("Selected the Cars database ");

$query = " CREATE TABLE inventory 
( Crt int(255) PRIMARY KEY AUTO_INCREMENT, VIN varchar(17) , YEAR INT, Make varchar(50), Model varchar(100), 
TRIM varchar(50), EXT_COLOR varchar (50), INT_COLOR varchar (50), ASKING_PRICE DECIMAL (10,2), 
SALE_PRICE DECIMAL (10,2), PURCHASE_PRICE DECIMAL (10,2), MILEAGE int, TRANSMISSION varchar (50), 
PURCHASE_DATE DATE, SALE_DATE DATE)";
//echo "<p>***********</p>";
//echo $query ;
//echo "<p>***********</p>";
if ($mysqli->query($query) === TRUE) 
{
    echo "Database table 'INVENTORY' created</P>";
}
else
{
    echo "<p>Error: </p>" . $mysqli->error;
}




$mysqli->close();

?>

<p> <a href="../TheSite/AccessPage.php">AccessPage</a> </p>
