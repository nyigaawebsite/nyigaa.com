
<?php

include "../Database/code.php"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INVENTORY LOGIN PAGE</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<div id="heading">
    <h2>GAMBELLA UNIVERSITY STOCK INVENTORY MANAGEMENT SYSTEM</h2>
</div>

<body>
    <div class="main"><br><br><br><br>
        <section class="form1">
       <form method="POST" action="index.php">
        <div id="userform">
            <div id="text"><br>
            <h3>INVENTORY LOGIN FORM</h3>
            </div><br>
         <hr>
        <label>Username*</label><br>
        <input type="text" name="username" id="use" placeholder="enter user Lastname" required=""><br>
        <label>Password*</label><br>
        <input type="password" name="password" id="use" placeholder="enter user Password"
        required=""><br><br>
        <hr>
        <label>Choose your Role: </label><br>
        <input type="radio" name="usertype" id="role" value="Admin" class="radi" required="">&nbsp; Admin|
        <input type="radio" name="usertype" id="role" value="Supplier" class="radi" required="">&nbsp; Supplier |
        <input type="radio" name="usertype" id="role" value="Customer" class="radi" required="">&nbsp; Customer|<br>
        <input type="radio" name="usertype" id="role" value="Salesperson" class="radi" required="">&nbsp; Salesperson|
         <hr><br>


           <input type="submit" name="submit" value="Login" id="sub" /><br><br><br>
           <p>Click the Button below to create an account</p>
           <button type="submit"><a href="signup.php">Create Account</a></button>
    </form>
    </section>
    
    </div>
    <div class="foot">
        
        <h2>All copyrights are reserved at Gambella University</h2>
    </div>
    
</body>

</html>