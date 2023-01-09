<?php
$server ="localhost";
$username ="root";
$password ="";
$database ="treepzer";

$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die('connection failed');
}else{
    echo"sucessful";
}

?>