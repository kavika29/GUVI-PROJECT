<?php
$hostname = 'localhost';

/*** mysql username ***/
$username = 'username';

/*** mysql password ***/
$password = 'password';
$email = $_POST['email'];
$password = $_POST['password'];
$repeat password = $_POST['repeat password'];

$conn =new mysql('localhoast','root','','test');
if($conn->connrct_error)
{
	die('connection failed :'.$conn->connect_error);
}
else
{
	$stmt =$conn->prepare("insert into registration(email,password,repeatpassword) values (?,?,?)");
	$stmt->bind_param("sss",$email,$password,$repeat password);
	$stmt->execute();
	echo"registration successfully..";
	$stmt->close();
	$cinn->close();
}

?>