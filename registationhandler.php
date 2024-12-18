<?php session_start();
if(isset($_POST["btnSubmit"]))
{
//read the values user has given and assigned to variables.
	
$name= $_POST["txtName"];
$email = $_POST["txtEmail"];
$password = $_POST["txtPassword"];
$contact = $_POST["txtContactNo"];

//connect with data base
$con = mysqli_connect("localhost","root","","login_db","3308");

//Error handling

if(!$con)
{
	die("Sorry we are facing technical issue.");
}
	
$sql="INSERT INTO `user` (`email`, `name`, `contactnumber`, `password`) VALUES ('".$email."', '".$name."', '".$contact."', '".$password."');";

//Execute query against the database.
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0)
{
	//create the session 
	$_SESSION["userName"] ="$email";
	header('Location:home.html');
}
else
{
	header('Location:Login.html');
}

}
?>