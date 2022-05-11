<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1> Tạo thông tin sinh viên</h1>
    <form action="/ManagementStudent/handler/CreateStudent.php" method="post"enctype = "multipart/from-data">
        <div class="form-group">
        <label for="nameStudent">Tên sinh viên</label>
        <input type="text" name="nameStudent" class="form-control"><br>
        <label for="Age">Tuổi</label>
        <input type="text" name="dateofbirthstudent" class="form-control"><br>
        <label for="uiversity">Tên trường đại học</label>
        <input type="text" name="university" class="form-control"><br>
        <button type="submit" class="btn btn-outline-danger">Đăng Ký thông tin sinh viên</button>   

        </div>
    </form>
</body>
</html>