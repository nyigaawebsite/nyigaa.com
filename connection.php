<?php
session_start();
$ServerName ="localhost";
$dbuser ="root";
$password ="";
$DBName = "STOCK_INVENTORY";


$link = mysqli_connect($ServerName,$dbuser,$password,$DBName);

?>