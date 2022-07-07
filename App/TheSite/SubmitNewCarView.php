

<head>
<title>Joy of PHP</title>
</head>
<p><a href="AllCarsView.php">View Cars with Edit Links</a></p>


<?php include "../Register/header.php"; ?>
<body>
<h1>Sam's Used Cars
</h1>
<form action="SubmitNewCarScript.php" method="post">
	VIN: <input name="VIN" type="text" /><br />
	<br />
	Make: <input name="Make" type="text" /><br />
	<br />
	Model: <input name="Model" type="text" /><br />
	<br />
	Price: <input name="Asking_Price" type="text" /><br />
	<br />
	<input name="Submit1" type="submit" value="submit" /><br />
	&nbsp;</form>
</body>

</html>
