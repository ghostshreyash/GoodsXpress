<?php

include("menu.html");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </head>
    <body>
        <div class="d-flex justify-content-center align-items-center vh-100">
            <form action="upload.php" enctype="multipart/form-data" method="post" class="w-50 bg-warning p-5 rounded-3">
                <h3 class="text-center">Upload Product</h3>
                <input class="form-control mt-2" type="text" placeholder="Product Name" name="name">
                <input class="form-control mt-2" type="text" placeholder="Product Price" name="price">
                <textarea class="form-control mt-2" rows="5" cols="20" placeholder="Product Details" name="details"></textarea>
                <input class="form-control mt-2" type="text" placeholder="Product Code" name="code">

                <label class="ms-3 mt-2 text-success" for="category">Category</label>
                <select class="form-control" id="category" name="category">
                    <option>Electronics</option>
                    <option>Fashion</option>
                    <option>Furniture</option>
                    <option>Home Appliances</option>
                </select>

                <label class="ms-3 mt-2 text-success" for="active">Active</label>
                <select class="form-control" id="acive" name="active">
                    <option>Yes</option>
                    <option>No</option>
                </select>

                <input type="file" class="form-control mt-2" accept=".jpg,.jpeg,.png" name="pdtImg">

                <div class="text-center mt-4">
                <button class="btn btn-danger btn-outline-light">Upload</button>
                </div>
            </form>
        </div>
    </body>
</html>