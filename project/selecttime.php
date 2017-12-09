<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sport Complex Web Booking</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <form action="information.php" method="post">
        <table>
        
            <tr>
                <td id="text">สนามที่เลือก : </td>
                <td><?php echo $_POST['feild'] ?></td>
            </tr>
            <tr>
                <td id="text">วันที่เลือก : </td>
                <td><?php echo $_POST['date'] ?></td>
            </tr>
            <tr>
                <td id="text">เลือกเวลาเริ่ม : </td>
                <td><input type="time" name="stime" id="stime"></td>
            </tr>
            <tr>
                <td id="text">เลือกระยะเวลา : </td>
                <td>
                    <select name="hour" id="hour">
                        <option value="1">1 hour</option>
                        <option value="2">2 hour</option>
                        <option value="3">3 hour</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="ยืนยัน"></td>
            </tr>
        </table>
        <?php
            
            echo '<input type="hidden" name="feild" value="'.$_POST['feild'].'">';
            echo '<input type="hidden" name="date" value="'.$_POST['date'].'">';
        ?>
    </form>
</body>
</html>