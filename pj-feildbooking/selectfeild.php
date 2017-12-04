<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sport Complex Web Booking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="selecttime.php" method="post">
        <table>
            <tr>
                <td id="text">ชื่อ-นามสกุล</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td id="text">สนาม:</td>
                <td>
                    <select name="feild" id="feild">
                        <?php
                        $connect = mysqli_connect("localhost","root","","sport");
                        $sql = 'select Fname from feild';
                        $result = mysqli_query($connect,$sql);
                        if (!$result) {
                            echo mysqli_error();
                            die('Can not access database!');
                        } else {
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<option value="'.$row['Fname'].'">'.$row['Fname'].'</option>';
                            }
                            mysqli_close($connect);
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td id="text">วันที่:</td>
                <td><input type="date" name="date" id="date"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="ยืนยัน"></td>
            </tr>
        </table>
        
    </form>
</body>
</html>