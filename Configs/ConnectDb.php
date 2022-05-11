<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbmanagementstudent = "MANAGEMENTSTUDENT";
// connectObject quản lý chuỗi kết nối my sql
$connect = new mysqli($dbhost, $dbuser, $dbpassword, $dbMANAGEMENTSTUDENT);
if($connect->connect_error){
    die("connection die".$connect->connect_error);
}
    echo "Connect Succsessful !";

//mysqli_close($connectObject);


?>