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
        <script>
            function orderConfirm() {
                alert("Whoo! Your order has been placed.");
            }
        </script>
    </body>
</html>

<?php

include('../shared/dbconnect.php');

$sql_obj = mysqli_query($conn, "select * from cart join product on cart.pid=product.pid where userId=$_SESSION[userId]");
$total = 0;
while($row=mysqli_fetch_assoc($sql_obj)) {

    echo "<div class='pdtCard'>
        <div class='name'>$row[name]</div>
        <img class='pdtImg' src='$row[imgPath]'>
        <div class='price'>$row[price]</div>
        <div class='code'>$row[code]</div>
        <div class='details'>$row[details]</div>
        <!-- <div class='qty'>
            <input type='number' placeholder='Quantity' value='1'>
        </div> -->
        <hr>
        <div class='text-center'>
            <a href='deleteCart.php?cartId=$row[cartId]'>
                <button class='btn btn-danger'>Remove</button>
            </a>
        </div>
    </div>";
    $total += $row['price'];
}

echo "<div class='bg-warning p-2 mt-3 d-flex justify-content-evenly'>
        <h1>Total Payable : Rs.$total</h1>
        <form action='createOrder.php' method='post' class='d-flex'>
            <textarea required name='address' placeholder='Delivery Address' col=50></textarea>";


        $sql_obj = mysqli_query($conn, "select pid from cart where userId=$_SESSION[userId]");
        while($row=mysqli_fetch_assoc($sql_obj)) {
        echo "<input type='hidden' name='pid[]' value='$row[pid]'>";
        }

        echo "<button onclick='orderConfirm()' class='bg-success text-white fs-5 fw-bold ms-5'>Place Order</button>
        </form>
    </div>";
?>