<?php

session_start();
$_SESSION['login_status'] = false;


$uname = $_POST['uname'];
$upass = $_POST['upass'];
$cipher_text = md5($upass);

include("dbconnect.php");

$sql_obj = mysqli_query($conn,"select * from user where username='$uname' and password='$cipher_text'");
$total_rows = mysqli_num_rows($sql_obj);

if($total_rows == 0) {
    echo "Invalid credentials";
    die;
}
echo "Login Success";
$row = mysqli_fetch_assoc($sql_obj);
print_r($row);

$_SESSION['login_status'] = true;
$_SESSION['userId'] = $row['userId'];
$_SESSION['username'] = $row['username'];
$_SESSION['userType'] = $row['userType'];

if($row['userType'] == 'Vendor') {
    header("location:../vendor/home.php");
}
else if($row['userType'] == 'Customer') {
    header("location:../customer/home.php");
}

?>