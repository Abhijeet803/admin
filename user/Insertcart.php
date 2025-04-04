<?php



session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$product_name = $_POST['PName'];
$product_price = $_POST['PPrice'];
$product_quantity = $_POST['PQuantity'];


if (isset($_POST['addCart'])) {

    $check_product = array_column($_SESSION['cart'], 'productName');
    if (in_array($product_name, $check_product)) {
        echo "
           <script>  
            alert('product already added');
             window.location.href = 'index.php';
            </script>

        ";
    } else {
        $_SESSION['cart'][] = array(
            'productName' => $product_name,
            'productPrice' => $product_price,
            'productQuantity' => $product_quantity
        );
        header("location:viewCart.php");
    }


}


//REMOVE PRODUCT
if (isset($_POST['remove'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['productName'] === $_POST['item']) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            header('location:viewCart.php');

        }

    }

}


//UPDATE PRODUCT 

if (isset($_POST['update'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['productName'] === $_POST['item']) {
            $_SESSION['cart'][$key] = array(
                'productName' => $product_name,
                'productPrice' => $product_price,
                '$productQuantity' => $product_quantity
            );
            header("location:viewCart.php");

        }

    }

}























// session_start();

// session_destroy();

// if(isset($_SESSION['user'])){

// $product_name = $_POST['PName'];
// $product_price = $_POST['PPrice'];
// $product_quantity = $_POST['PQuantity'];

// if (session_status() === PHP_SESSION_NONE) {
//     session_start(); // Start the session only if it hasn't been started yet
// }

// Now you can safely access $_SESSION variables
// if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
//     $_SESSION['cart'] = []; // Initialize it as an empty array if not set
// }

// Your existing code to work with the cart
// $check_product = array_column($_SESSION['cart'], 'productName');
// $check_product = array_column($_SESSION['cart'], 'productName');
//     if (in_array($product_name, $check_product)) {
//         echo "
//         <script> 
//         alert('product already added');
//         window.location.href = 'index.php';
//         </script>
//         ";
//     } else {
//         $_SESSION['cart'][] = array(
//             'productName' => $product_name,
//             'productPrice' => $product_price,
//             '$productQuantity' => $product_quantity
//         );
//         header("location:viewCart.php");

//     }



//Remove product
// if (isset($_POST['remove'])) {
//     foreach ($_SESSION['cart'] as $key => $value) {
//         if ($value['productName'] === $_POST['item']) {
//             unset($_SESSION['cart'][$key]);
//             $_SESSION['cart'] = array_values($_SESSION['cart']);
//             header('location:viewCart.php');

//         }

//     }

// }


//Update product
// if (isset($_POST['update'])) {
//     foreach ($_SESSION['cart'] as $key => $value) {
//         if ($value['productName'] === $_POST['item']) {
//             $_SESSION['cart'][$key] = array(
//                 'productName' => $product_name,
//                 'productPrice' => $product_price,
//                 '$productQuantity' => $product_quantity
//             );
//             header("location:viewCart.php");

//         }

//     }

// }

// else{
//     header("location: form/login.php");
// }



?>