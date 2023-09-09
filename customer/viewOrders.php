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
                width:15%;
                margin:10px;
                border:2px solid gray;
                border-radius:20px;
                padding:10px; 
            }
            .pdtImg {
                width:100%;
                height:33%;
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

include('../shared/dbconnect.php');

$sql_obj = mysqli_query($conn, "select * from orders join product on orders.pid=product.pid where userId=$_SESSION[userId]");

while($row=mysqli_fetch_assoc($sql_obj)) {

    echo "<div class='pdtCard'>
            <div class='name'>$row[name]</div>
            <img class='pdtImg' src='$row[imgPath]'>
            <div class='price'>$row[price]</div>
            <div class='code'>$row[code]</div>
            <div class='details'>$row[details]</div>
        </div>";
}

?>