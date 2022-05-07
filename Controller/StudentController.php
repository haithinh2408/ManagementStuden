<?php
include("../Models/Entity_Student.php");

class StudentController{
    function ViewDetail(){
        $student = new Entity_Student("1234","Nguyen Van A","23","HUMG");
        include_once("../Views/StudentView/ViewStudent.php");
    }
    function ViewStudentList(){
        $listStudent = array(
            "1"=>new Entity_Student("1234","Nguyen Van A","23","HUMG"),
            "2"=>new Entity_Student("1235","Nguyen Van B","23","HUMG"),
            "3"=>new Entity_Student("1236","Nguyen Van C","23","HUMG"),
        );
        include_once("../Views/StudentView/ViewListStudent.php");
    }
    function ViewCreateStudent(){
        include_once("../View/StudentView/ViewCreatsStudent.php");
    }
    function CreateStudent(){
        $student =  $_POST["name"];
        include_once("../View/StudentView/ViewDetailCreate.php");
    }
}
$StudentController = new StudentController();
$StudentController->ViewStudentList();
?>