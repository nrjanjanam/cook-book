<?php
session_start();
include_once 'db_connect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: index.html");
}

// if(isset($_POST['btn-login']))
// {
	
	$email=$_POST['email'];
	$pwd=$_POST['pass'];
	$res=mysqli_query($conn,"SELECT * FROM register WHERE (email='$email'OR contact_no='$email')");
	$row=mysqli_fetch_array($res);
	if($row['password']==$pwd)
	{
		$_SESSION['user']=$row['name'];
		header("Location: recipes.php");
	}
	



mysqli_close($conn);
?>