
<?php

include "../Database/Register.php"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INVENTORY LOGIN PAGE</title>
    <link rel="stylesheet" type="text/css" href="../CSS/sign.css">
</head>
<div id="heading">
    <h2>GAMBELLA UNIVERSITY STOCK INVENTORY MANAGEMENT SYSTEM</h2>
</div>

<body>
    <div class="main"><br><br>
        <section class="form1">
       <form method="POST" action="signup.php">
        <div id="userform">
            <div id="text"><br>
            <h3>INVENTORY SIGNUP FORM</h3>
            </div><br>
         <hr><br>
        <input type="text" name="firstname" id="use"  placeholder="Enter your firstname" required=""><br><br>
        <input type="text" name="middlename" id="use" placeholder="Enter your middlename" required=""><br><br>
        <input type="text" name="lastname" id="use" placeholder="Enter your Lastname" required=""><br><br>
        <input type="text" name="username" id="use" placeholder="Enter your username" required=""><br><br>
        <input type="text" name="mobile" id="use" placeholder="Enter your mobile number" required=""><br><br>
        <input type="email" name="email"id="use"  placeholder="Enter your email e.g. emam@gmail.com" required=""><br><br>
        <input type="password" name="password" id="use" placeholder="enter user Password"
        required=""><br><br>
        <input type="date" name="registeredAt"id="use"  placeholder="Select your date of registration" required=""><br><br>
        <hr>
        <label>Choose your Role: </label><br>
        <input type="radio" name="usertype" id="role" value="Admin" class="radi" required="">&nbsp; Admin|
        <input type="radio" name="usertype" id="role" value="Supplier" class="radi" required="">&nbsp; Supplier |
        <input type="radio" name="usertype" id="role" value="Customer" class="radi" required="">&nbsp; Customer|<br>
        <input type="radio" name="usertype" id="role" value="Salesperson" class="radi" required="">&nbsp; Salesperson|
         <hr><br>

           <input type="submit" name="submit" value="Register" id="sub" /><br><br><br>
           <p>Click the Button below to log into your account</p>
           <button type="submit"><a href="index.php">Login</a></button>
    </form>
    </section>
    
    </div>
    <div class="foot">
        
        <h2>All copyrights are reserved at Gambella University</h2>
    </div>
    
</body>

</html>