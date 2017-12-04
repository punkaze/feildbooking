<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sport Complex Web Booking</title>
</head>
<body>
    <?php
        echo 'ชื่อ-นามสกุล : '.$_POST['name'].'<br>';
        echo 'สนาม : '.$_POST['feild'].'<br>';
        echo 'วันที่ : '.$_POST['date'].'<br>';
        echo 'เวลาเริ่ม : '.$_POST['stime'].'<br>';
        echo 'ระยะเวลา : '.$_POST['hour'].'<br>';
    ?>
</body>
</html>