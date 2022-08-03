<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
// $database_name="c-maint";
$con = mysqli_connect('localhost', 'root', '','c-maint');

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `c-maint`(`Name`, `Email`, `Password`)  VALUES ('$txtName', '$txtEmail', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>