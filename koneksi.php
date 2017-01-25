<?php


$conn = mysqli_connect("localhost","root","","tn");



if (!$conn) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());

}

// echo 'Success... ' . mysqli_get_host_info($koneksi) . '\n';

// mysqli_close($conn);
?>
