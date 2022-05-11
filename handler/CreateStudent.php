
<?php
include("../Configs/ConnectDb.php");
$nameStudent = $_POST["nameStudent"] ;
$dateofbirthStudent = $_POST["dateofbirthStudent"] ;
$University = $_POST["University"] ;
$insertStudent = "INSERT INTO student(namestudent,age,university) Values ('$nameStudent','$dateofbirthStudent','$University')" ; 
if($connect->query($insertStudent)){
    echo "Student Created";
}
else{
    echo "Student Faild";

}
?>