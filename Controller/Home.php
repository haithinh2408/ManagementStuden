<?php
class Home{
    function index(){
        echo "Welcome to Application Student manager";
        echo "<a href='/MANAGEMENTSTUDENT/Student.php/ViewStudentList.php'><button>Xem chi tiết tất cả sinh viên</button></a>";
        echo "<a href='/MANAGEMENTSTUDENT/Student.php/ViewCreateStudent.php'><button>Tạo sinh viên</button></a>";
    }
}


?>