<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sinh viên vừa được tạo</h1>
    <?php
           while($DataRows = $resultDataStudent->fetch_assoc()){
            echo "===>" .$DataRows["id"];
            echo "===>" .$DataRows["name"];
            echo "===>" .$DataRows["age"];
            echo "===>" .$DataRows["university"];
        }
    ?>

</body>
</html>