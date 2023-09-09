<?php

include('../shared/auth_guard_customer.php');
include('menu.html');

$cartId = $_GET['cartId'];

include('../shared/dbconnect.php');
$status = mysqli_query($conn, "delete from cart where cartId = $cartId");
if($status) {
    echo "Product removed successfully!";
    header("location:viewCart.php");
}
else {
    echo "Failed to remove product";
    echo mysqli_error($conn);
}
?>