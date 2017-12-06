<?php
    $connect = mysqli_connect("localhost","root","","sport");
    $sql = 'INSERT INTO booking (BID, FID, MID, Bdate, Tstart, Tend) VALUES (NULL, '.$_POST['fID'].', '.$_POST['mID'].', "'.$_POST['date'].'", "'.$_POST['sTime'].'", "'.$_POST['eTime'].'")';
    $result = mysqli_query($connect,$sql);
    if (!$result) {
        echo mysqli_error();
    } else {
        echo 'Insert Complete !!';
    }
?>