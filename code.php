<?php
require_once "connection.php";
$message="";
$role="";

if (isset($_POST['submit'])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$usertype = $_POST['usertype'];

	$query = "SELECT * FROM `user` WHERE username ='$username' AND password ='$password' AND usertype= '$usertype'";
	
	$result = mysqli_query($link,$query);
	if (mysqli_num_rows($result)>0) {
		
		while ($row =mysqli_fetch_assoc($result)) {

			if ($row["usertype"]=="Admin") {
				
				$_SESSION['username']=$row["username"];
				$_SESSION['role']=$row["usertype"];
				header("Location:Admin.php");
			}
			elseif ($row["usertype"]=="Customer") {
				$_SESSION['username']=$row["username"];
				$_SESSION['role']=$row["usertype"];
				header("Location:Customer.php");
			}
			elseif ($row["usertype"]=="Supplier") {
				$_SESSION['username']=$row["username"];
				$_SESSION['role']=$row["usertype"];
				header("Location:Supplier.php");
			}
		

		}
	}
	else{
		
		header("location:index.php");
	}
	
}


?>