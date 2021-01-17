<?php
$conn = mysqli_connect( 'localhost:3308', 'root', '', 'cv_bt');
if($conn === false){
    die("Lỗi kết nối" . mysqli_connect_error());
}
?>