<?php
include "../Register/header.php";
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Sam's Used Cars</title>
   </head>

<?php
echo "Test"
?>

<p> <a href="../Register/login.php" style="color: blue;">Login Page</a> </p>

<!-- onclick="return confirm('Are you sure you want to force insert data in the DB?');" is the javascript component-->
<p> <a href="../TheSite\dbInsert.php" onclick="return confirm('Are you sure you want to force insert data in the DB?');" 
style="color: red;">Force Insert Data in DB</a> </p> 


<p> <a href="../TheSite/AllCarsView.php" style="color: green" data-confirm="qqq">All Cars View</a> </p>

</html>
