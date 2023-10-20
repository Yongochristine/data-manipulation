<?php
session_start();
include "dbconnect.php";
$uname=$_REQUEST['uname'];
$pwd=$_REQUEST['pwd'];
if(empty($uname)){
    header('Location:index.php?error=username is required');
    exit();
}
else if(empty($pwd)){
    header('Location:index.php?error=Fill in your password');
    exit();
}
$sql = "INSERT INTO staff (uname, password) VALUES ('$uname', '$pwd')";
if($conn->query($sql)===true){
    echo "new records inserted";
}else{
    echo "error";
}
$conn->close();
?>