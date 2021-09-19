<?php
require_once "connection.php";

#checking for the post method to establish connection
if (isset($_POST['insert'])) {
    $userid = trim($_POST['userid']);
    $orderid = trim($_POST['orderid']);
    $code = trim($_POST['code']);
    $type = trim($_POST['type']);
    $mode = trim($_POST['mode']);
    $status = trim($_POST['status']);
    $createdAt = trim($_POST['createdAt']);
    $updatedAt = trim($_POST['updatedAt']);
    $content = trim($_POST['content']);

    #Database insertion query
    $query = "INSERT INTO `transaction`(`id`, `userid`, `orderid`, `code`, `type`, `mode`, `status`, `createdAt`, `updatedAt`, `content`) 
    VALUES (NULL,'$userid','$orderid','$code','$type','$mode','$status','$createdAt','$updatedAt','$content');";
    $query_run = mysqli_query($link,$query);

    
}


?>
