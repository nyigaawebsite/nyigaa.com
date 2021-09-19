<?php
require_once "connection.php";
#posting the data into the database
if (isset($_POST['submit'])) {
   $firstname = trim($_POST['firstname']);
   $middlename = trim($_POST['middlename']);
   $lastname = trim($_POST['lastname']);
   $username = trim($_POST['username']);
   $mobile = trim($_POST['mobile']);
   $email = trim($_POST['email']);
   $password = trim($_POST['password']);
   $registeredAt = trim($_POST['registeredAt']);
   $usertype = trim($_POST['usertype']);

   #form validation section!!#


   #data insertion into the database

   $query = "INSERT INTO `user`(`id`, `usertype`, `firstname`, `middlename`, `lastname`, `username`, `mobile`, `email`, `password`, `registeredAt`)
    VALUES (NULL,'$usertype','$firstname','$middlename','$lastname','$username','$mobile','$email','$password','$registeredAt')";

    $query_run = mysqli_query($link,$query);
    
   

}



?>
