<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";

// connectObject quản lý chuỗi kết nối my sql
$connectObject = new mysqli($dbhost, $dbuser, $dbpassword);
if($connectObject->connect_error){
    die("connection die".$connectObject->connect_error);
}
    echo "Connect Succsessful !";

mysqli_close($connectObject);


?>