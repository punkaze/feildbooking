<?php
    date_default_timezone_set("Asia/Bangkok");
    echo date("Y-m-d")."<br>";
    print_r(getdate());
    echo "<br><br>";
    $connect = mysqli_connect("localhost","root","","sport");
    $sql = 'SELECT * FROM member WHERE Mname Like "natee%"';
    $result = mysqli_query($connect,$sql);
    $numrows = mysqli_num_rows($result);
    if (!$result) {
        echo mysqli_error();
        die('Can not access database!');
    } else {
        if ($numrows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $mID = $row['MID'];
            }
            echo $mID.'<br>';
        } else {
            echo "You are not member";
        }
        mysqli_close($connect);
    }

    if ($_POST['eTime'] > strtotime("20:30:00")) {
        echo "It's over time";
    } else {
        echo "It's in time";
    }
?>