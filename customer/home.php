<?php
    include('../shared/auth_guard_customer.php');
    include('menu.html');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            .pdtCard {
                display:inline-block;
                width:18%;
                margin:10px;
                border:2px solid gray;
                padding:10px; 
            }
            .pdtImg {
                width:100%;
                height:35%;
            }
            .price {
                font-size:25px;
            }
            .price::before {
                content : "Rs.";
            }
            .name {
                font-size:25px;
                font-weight:bold;
                color:purple;
            }
            .details {
                font-size:17px;
            }

        </style>
    </head>
    <body>
    </body>
</html>

<?php

    include_once("../shared/dbconnect.php");
    $sql_obj = mysqli_query($conn, "select * from product");

    while($row=mysqli_fetch_assoc($sql_obj)) {
        // print_r($row);

        echo "<div class='pdtCard'>
            <div class='name'>$row[name]</div>
            <img class='pdtImg' src='$row[imgPath]'>
            <div class='price'>$row[price]</div>
            <div class='code'>$row[code]</div>
            <div class='details'>$row[details]</div>
            <hr>
            <div class='text-center'>
                <a href='addCart.php?pid=$row[pid]'>
                    <button class='btn btn-warning'>Add to Cart</button>
                </a>
            </div>
        </div>";
    }
?>