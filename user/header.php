
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
          integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM8ok2Hft5zJHGGg9d6FJkj6E5KwKKsmk5jlwKq" crossorigin="anonymous">
</head>
<body>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Start the session only if it hasn't been started yet
}
$count = 0;
if (isset($_SESSION['cart'])) {
    $count = count($_SESSION['cart']);
}
?>

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid font-monospace">
        <a class="navbar-brand pb-2"><img src="trapigo_private_ltd_logo.JPEG" alt="Logo"></a>
        
        <div class="d-flex">
            <a href="index.php" class="text-warning text-decoration-none pe-2"><i class="fa-solid fa-house"></i>Home</a>
            <a href="viewCart.php" class="text-warning text-decoration-none pe-2"><i class="fa-solid fa-cart-shopping"></i>Cart(<?php echo $count ?>) |</a>

            <span class="text-warning pe-2">
                <i class="fa-solid fa-user"></i>Hello,  |
                <?php
                if(isset($_SESSION['user'])){
 //   session_start();
  echo $_SESSION['user'];
  echo "
   | <a href='form/logout.php' class='text-warning text-decoration-none pe-2'><i class='fa-solid fa-right-to-bracket'></i>LOGOUT |</a>
  ";
                }

                else{
                    echo "
                   | <a href='form/login.php' class='text-warning text-decoration-none pe-2'><i class='fa-solid fa-right-to-bracket'></i>Login |</a>
                    ";

                }
                ?>
                 
                <a href="../mystore.php" class="text-warning text-decoration-none pe-2">Admin</a>
            </span>
        </div>
    </div>
</nav>

<div class="bg-danger sticky-top font-monospace">
    <ul class="list-unstyled d-flex justify-content-center ">
        <li><a href="Laptop.php" class="text-decoration-none text-white fw-bold fs-4 px-5">LAPTOP</a></li>
        <li><a href="Mobile.php" class="text-decoration-none text-white fw-bold fs-4 px-5">MOBILE</a></li>
        <li><a href="Bag.php" class="text-decoration-none text-white fw-bold fs-4 px-5">BAGS</a></li>
    </ul>
</div>

</body>
</html>