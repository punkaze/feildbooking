<!DOCTYPE html>

<!-- หน้าเเสดงข้อมูลต่อจากหน้า search.php -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<body>
    <?php
        
     echo $_POST['search1']; //ตัวเเปรรับชื่อจากหน้า search
      
        echo '<table>';
        echo '<tr><td>ชื่อ-นามสกุล :</td> <td> '.$_POST['name'].'</td></tr><br>';
        echo '<tr><td>สนาม :</td> <td>'.$_POST['feild'].'</td></tr><br>';
        echo '<tr><td>วันที่ : </td> <td>'.$_POST['date'].'</td></tr><br>';
        echo '<tr><td>เวลาเริ่ม :</td> <td>'.$_POST['stime'].'</td></tr><br>';
        echo '<tr><td>ระยะเวลา :</td> <td>'.$_POST['hour'].'</td></tr><br>';
        echo '<tr><td>เบอร์โทร :</td> <td>'.$_POST['Mtel'].'</td></tr><br>';
        ?>
</body>



</html>