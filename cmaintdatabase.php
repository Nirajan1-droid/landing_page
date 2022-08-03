
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
// $database_name="c-maint";
$con = mysqli_connect('localhost', 'root', '','c-maint');

// get the post records
$name = $_POST['name'];
$mail = $_POST['mail'];
$pw = $_POST['pw'];

// database insert SQL code
$sql = "INSERT INTO `c-maint`(`Name`, `Email`, `Password`)  VALUES ('$name', '$mail', '$pw')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>