<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart</title>
</head>
<body>

<?php
session_start(); // Ensure the session is started
include 'header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center bg-light mb-5 rounded">
            <h1 class="text-warning">My Cart</h1>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-around">
        <div class="col-sm-12 col-md-6 col-lg-9">
            <table class="table text-bordered text-center">
                <thead class="bg-danger text-white fs-5">
                    <tr>
                        <th>Serial No</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $total = 0; 
                    $i =0;// Initialize total
                    if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $key => $value) {
                            // Check if the required keys exist
                            if (isset($value['productPrice'], $value['productQuantity'], $value['productName'])) {
                                $ptotal = $value['productPrice'] * $value['productQuantity'];
                                $total += $ptotal; // Accumulate total price
                                $i = $key +1;
                              
                                echo "
                                <form action='Insertcart.php' method='POST'>
                                    <tr>
                                        <td>$key</td>
                                        <td><input type='hidden' name='PName' value='$value[productName]'> $value[productName]</td>
                                        <td><input type='hidden' name='PPrice' value='$value[productPrice]'> $value[productPrice]</td>
                                        <td><input type='text' name='PQuantity' value='$value[productQuantity]'></td>
                                        <td>$ptotal</td>
                                        <td><button name='update' class='btn-warning'>Update</button></td>
                                        <td><button name='remove' class='btn-danger'>Delete</button></td>
                                        <td><input type='hidden' name='item' value='$value[productName]'></td>
                                    </tr>
                                </form>
                                ";
                            } else {
                                // Handle the case where the expected keys are missing
                                echo "<tr><td colspan='7'>Product data is missing.</td></tr>";
                            }
                        }
                    } else {
                        echo "<tr><td colspan='7'>Your cart is empty.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-3 text-center">
            <h3>Total</h3>
            <h1 class="bg-danger text-white"><?php echo number_format($total, 2); ?></h1>
        </div>
    </div>
</div>

</body>
</html>