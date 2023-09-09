<?php

include('../shared/auth_guard_customer.php');

$userId = $_SESSION['userId'];
$address = $_POST['address'];
$pid = $_POST['pid'];


include('../shared/dbconnect.php');

foreach ($pid as $pid) {
$status = mysqli_query($conn, "insert into orders(userId,address,pid) values($userId,'$address',$pid)");
    if($status) {
        $result = mysqli_query($conn, "delete from cart where userId=$userId");
        if($result) {
            echo "Product deleted from cart successfully!";
        }
        else {
            echo "Failed to delete product from cart";
            echo mysqli_error($conn);
        }
        echo "Product added in the order table";
        header("location:viewOrders.php");
    }
    else {
        echo "Failed to add order";
        echo mysqli_error($conn);
    }
}
?>