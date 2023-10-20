<?php
$servename="localhost";
$user="root";
$password="";
$databasename="campus";
$conn=new mysqli($servename,$user,$password,$databasename);
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}else{
    echo "connection successful";
}
?>