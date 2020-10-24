<?php

session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: index.html");
}
include_once 'db_connect.php';
 $name = $_POST['name'];
 $country =$_POST['country'];
$contact =$_POST['contactno'];
 $email = $_POST['email'];
 $pwd1 = $_POST['pass'];
 if(mysqli_query($conn,"INSERT INTO register(id,name,country,contact_no,email,password) VALUES('','$name','$country','$contact','$email','$pwd1')"))
 {
  $_SESSION['user']=$name;
        header("Location: index.html");

 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
mysqli_close($conn);
?>