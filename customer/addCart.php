<?php

include('../shared/auth_guard_customer.php');
include('menu.html');

$pid = $_GET['pid'];
$userId = $_SESSION['userId'];

echo "Received product id = $pid";

include('../shared/dbconnect.php');
$status = mysqli_query($conn, "insert into cart(userId,pid) values($userId,$pid)");
if($status) {
    echo "Added to cart successfully!";
    header("location:viewCart.php");
}
else {
    echo"Failed to add to cart";
    echo mysqli_error($conn);
}
?>