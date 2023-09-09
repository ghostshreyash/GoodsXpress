<!-- <html>
    <body>
        <script>
            function checkout() {
                res = confirm("Are you sure want to logout?");
                if(res) {
                    window.location="../shared/logout.php";
                }
            }
        </script>
    </body>
</html> -->


<?php
    session_start();
    include("auth_guard_style.html");
    if(!isset($_SESSION['login_status'])) {
        echo "You skipped login...Do login first";
        echo "<a href='../shared/login.html'>Login here</a>";
        die;
    }

    if($_SESSION['login_status'] == false) {
        echo "Login failed!";
        echo "<a href='../shared/login.html'>Login here</a>";
        die;
    }

    if($_SESSION['userType'] != 'Vendor') {
        echo "Unauthorised access for this user";
        die;
    }

    $userId = $_SESSION['userId'];
    $username = $_SESSION['username'];
    $userType = $_SESSION['userType'];

    echo "<div class='userbanner'>
            <div class ='userid'>#$userId</div>
            <div class ='username'>$username</div>
            <div class ='usertype'>$userType</div>
            <!-- <div style='cursor:pointer;'>
                <a onclick='checkout()'><button>Logout</button></a>
            </div>-->
    </div>"

?>