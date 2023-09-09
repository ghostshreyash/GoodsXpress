<?php

include('../shared/auth_guard_vendor.php');
include('menu.html');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            table,th,td {
                border: 2px solid black;
                text-align: center;
                padding: 10px;
            }
            table {
                margin:15px auto 15px auto;
            }
            th {
                font-size:18px;
            }
            td {
                font-size:16px;
            }
            .notify {
                /* background-color:red; */
                width:fit-content;
                margin: 10px;
                padding:10px;
                font-size:20px;
            }

        </style>
    </head>
    <body>
    
    </body>
</html>

<?php

include('../shared/dbconnect.php');

$sql_obj = mysqli_query($conn, "select o.*,p.*,u.username from orders AS o JOIN product AS p ON o.pid = p.pid JOIN user AS u ON o.userId = u.userId where p.uploadedBy=$_SESSION[userId]");

$total_rows=mysqli_num_rows($sql_obj);
    if($total_rows > 0) {

        echo "<table>
                <tr>
                    <th>Order ID</th>
                    <th>Username</th>
                    <th>Address</th>
                    <th>Order Date</th>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Details</th>
                    <th>Product Code</th>  
                </tr>";
                
        while($row=mysqli_fetch_assoc($sql_obj)) {
            echo "<tr>
                    <td>".$row["orderId"]."</td>
                    <td>".$row["username"]."</td>
                    <td>".$row["address"]."</td>
                    <td>".$row["date_created"]."</td>
                    <td>".$row["pid"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["price"]."</td>
                    <td>".$row["details"]."</td>
                    <td>".$row["code"]."</td>
                </tr>";
        }
        echo "</table>";
    }
    else {
        echo "<div class='notify'>No results found!</div>";
    }
?>