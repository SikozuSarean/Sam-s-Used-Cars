<?php
include "../Register/header.php";

?>
<p> <a href="../TheSite/AccessPage.php">AccessPage</a> </p>
<p> <a href="SubmitNewCarView.php">Submit a new car</a> </p>


<html>
<head>
    <meta charset="utf-8">
    <title>Sam's Used Cars</title>
    
    <style>
  /* The grid is used to format a table instead of a grid control on the list of Notes */
#Grid
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
width:80%;
border-collapse:collapse;
margin-left: auto;
margin-right: auto;
}
#Grid td, #Grid th 
{
font-size:1em;
border:1px solid #61ADD7;
padding:3px 7px 2px 7px;
}
#Grid th 
{
font-size:1.1em;
text-align:left;
padding-top:5px;
padding-bottom:4px;
background-color:#C2D9FE;
color: lightslategray;

}
#Grid tr.odd td 
{
color:#000000;
background-color: #F2F5A9;
}

#Grid tr.even  
{
color:#000000;
background-color: white;
}
#Grid head 
{
color:#000000;
background-color:teal;
}
.auto-style1 {
	text-align: center;
}
</style>
 
</head> 
<body background="bg.jpg">
<h1>Sam's Used Cars</h1>
<h3>Current Inventory</h3>
 <div class="auto-style1">
 <?php
include 'db.php';
$mysqli = $conn;
$mysqli->select_db("cars");
$query = "SELECT * FROM inventory";

/* Try to query the database */
if ($result = $mysqli->query($query)) {
   // Don't do anything if successful.
}
else
{
    echo "Error getting cars from the database: " . mysqli_error($mysqli)."<br>";
}

// Create the table headers
echo "<table id='Grid' style='width: 80%'>\n";
echo "<tr>";
echo "<th style='width: 50px'>Make</th>";
echo "<th style='width: 50px'>Model</th>";
echo "<th style='width: 50px'>Asking Price</th>";
echo "<th style='width: 50px'>Action</th>";
echo "</tr>\n";

$class ="odd";  // Keep track of whether a row was even or odd, so we can style it later
$counter = 0;
// Loop through all the rows returned by the query, creating a table row for each
while ($result_ar = mysqli_fetch_assoc($result)) {
    echo "<tr class=\"$class\">";
    $counter++;
    echo "<td><a href='CarView.php?VIN=".$result_ar['VIN']."'>" . $result_ar['Make'] . "</a></td>";
    echo "<td>" . $result_ar['Model'] . "</td>";
       echo "<td>" . $result_ar['ASKING_PRICE'] . "</td>";
        echo "<td>
        <a href='CarEditView.php?VIN=".$result_ar['VIN']."'>Edit</a> 

        <a href='AddImageView.php?VIN=".$result_ar['VIN']."'>Upload Image</a> 


        <a onClick=\"javascript: return confirm('Are you sure you want to delete this?');\" 
        href='CarDelete.php?VIN=".$result_ar['VIN']."' 
        style='color: red;''>Delete</a>

        </td>";
   echo "</tr>\n";
   
   // If the last row was even, make the next one odd and vice-versa
    if ($class=="odd"){
        $class="even";
    }
    else
    {
        $class="odd";
    }
}
echo "$counter Cars in total in the data base";
echo "</table>";
$mysqli->close();
//include 'footer.php'
?>
	 
 </body>

</html>