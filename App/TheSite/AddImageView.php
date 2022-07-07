<html>
<head>
<title>Sam's Used Cars - Image Upload</title>
</head>
<body background="bg.jpg">
<h1>Sam's Used Cars</h1>
<h3>Add Image</h3>

<p> <a href="../TheSite/AllCarsView.php" style="color: green" data-confirm="qqq">All Cars View</a> </p>

<?php 
include "../Register/header.php";
include 'db.php';
$mysqli = $conn;
$mysqli->select_db("cars");
$vin = $_GET['VIN'];
$query = "SELECT * FROM inventory WHERE VIN='$vin'";
/* Try to query the database */
if ($result = $mysqli->query($query)) {
}
else
{
    echo "Sorry, a vehicle with VIN of $vin cannot be found " . mysqli_error($mysqli)."<br>";
}
// Loop through all the rows returned by the query, creating a table row for each
while ($result_ar = mysqli_fetch_assoc($result)) {
    $year = $result_ar['YEAR'];
	$make = $result_ar['Make'];
    $model = $result_ar['Model'];
    $trim = $result_ar['TRIM'];
    $color = $result_ar['EXT_COLOR'];
    $interior = $result_ar['INT_COLOR'];
    $mileage = $result_ar['MILEAGE']; 
    $transmission = $result_ar['TRANSMISSION']; 
    $price = $result_ar['ASKING_PRICE'];
}
echo "<p>$color $year $make $model <br>VIN: $vin</p>";
echo "<p>Asking Price: $".number_format($price,0) ."</p>";


   
?>

<form action="AddImageScript.php" method="post" enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input name="VIN" type="hidden" value= "<?php echo "$vin" ?>" />
<input type="submit" name="submit" value="Submit">
</form>
<br/><br/>
<?php
$query = "SELECT * FROM images WHERE VIN='$vin'";
/* Try to query the database */
if ($result = $mysqli->query($query)) {
   // Got some results
   // Loop through all the rows returned by the query, creating a table row for each
while ($result_ar = mysqli_fetch_assoc($result)) {
    $image = $result_ar['ImageFile'];
    echo "<img src='car images/$image' width= '250'>  " ;
}
}
$mysqli->close();
?>
</body>

</html> 
