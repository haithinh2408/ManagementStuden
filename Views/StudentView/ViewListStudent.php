<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ManagementStudent</title>
</head>
<body>
    <h1>Chi tiết thông tin sinh viên</h1>
    <table>
        <tr>
            <th>ID sinh viên</th>
            <th>Tên sinh viên</th>
            <th>Tuổi</th>
            <th>Tên trường đại học</th>
        </tr>
     
             <?php
             echo "số lượng phần tử trong mảng sv".sizeof($listStudent);
             foreach($listStudent as $student){
                 echo "<tr> <td>".$student->id."</td> <td>".$student->name."</td> <td>".$student->age."</td> <td>".$student->university."</td> </tr>";
             }
             ?>
        
    </table>
</body>
</html>