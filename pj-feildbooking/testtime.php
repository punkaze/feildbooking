<?php

echo date("H:i:s", strtotime("16:30:01"))."<br>";

function endTime($startTime, $during){      //  function หาเวลาสิ้นสุด ของการเล่นของผู้จอง
    switch ($during) {      //  link เกี่ยวกับ function ที่เกี่ยวกับ date and time : https://www.w3schools.com/php/php_date.asp
        case '1': $eTime = date("H:i:s", strtotime($startTime) + 3599); break;
        case '2': $eTime = date("H:i:s", strtotime($startTime) + (3599*2)+1); break;
        case '3': $eTime = date("H:i:s", strtotime($startTime) + (3599*3)+2); break;
        default: echo "Something Wrong!!!"; break;
    }
    return $eTime;
}

function checkBooking(){
$connect = mysqli_connect("localhost","root","","sport");
//SELECT * FROM booking WHERE (FID='.$fid.') AND (Bdate="'.$date.'") AND (("'.$sTime.'" BETWEEN Tstart AND Tend) OR ("'.$eTime.'" BETWEEN Tstart AND Tend))
$sql = 'SELECT * FROM booking WHERE (FID=201) AND (Bdate="2017-12-04") AND (("17:30:01" BETWEEN Tstart AND Tend) OR ("18:00:00" BETWEEN Tstart AND Tend))';
$result = mysqli_query($connect,$sql);
$numrows = mysqli_num_rows($result);
if (!$result) {
    echo mysqli_error();
    die('Can not access database!');
} else {
    if ($numrows > 0) {
        $res = false;
    } else {
        $res = true;
    }
    mysqli_close($connect);
}
return $res;
}

echo endTime("16:30:01",'2')."<br>";
$f = checkBooking();
if ($f) {
    echo "ไม่ซ้ำ"."<br>";
} else {
    echo "ซ้ำ"."<br>";
}
date_default_timezone_set("Asia/Bangkok");
echo date("Y-m-d")."<br>";

// if (date("Y-m-d", strtotime("2017-12-04"))) {
//     # code...
// } else {
//     # code...
// }


?> 