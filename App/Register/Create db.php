

<?php
include "../Register/header.php";

include "../TheSite/db.php";
$mysqli = $conn;

   if (!$mysqli) { 
      die('Could not connect'); 
  } 
  echo 'Connected successfully to mySQL. <BR>'; 

// Create database
$sql = "CREATE DATABASE registration";
if ($mysqli->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $mysqli->error;
}

 $mysqli->select_db("registration");
   Echo ("Selected the users database");

$query = " CREATE TABLE `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 ";

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
