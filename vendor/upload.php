<?php

    include("../shared/auth_guard_vendor.php");
    include("menu.html");

    $userId = $_SESSION['userId'];

    include_once("../shared/dbconnect.php");

    $imgPath = "../shared/images/".$_FILES['pdtImg']['name'];
    move_uploaded_file($_FILES['pdtImg']['tmp_name'],$imgPath);

    $status = mysqli_query($conn,"insert into product(name,price,details,code,category,active,imgPath,uploadedBy) values('$_POST[name]','$_POST[price]','$_POST[details]','$_POST[code]','$_POST[category]','$_POST[active]','$imgPath','$userId')");

    if($status) {
        echo "Product Uploaded Successfully!";
        header("location:home.php");
    }
    else {
        echo "Product Uploadation failed!";
        echo mysqli_error($conn);
    }
    
?>