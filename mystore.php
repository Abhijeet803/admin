<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Home-page</title>

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- FontAwesome CDN (Corrected link) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM8ok2Hft5zJHGGg9d6FJkj6E5KwKKsmk5jlwKq" crossorigin="anonymous">
</head>

<?php

session_start();
if(!$_SESSION['admin']){
  header("location:form/login.php");
}

?>

<body>

  <nav class="navbar navbar-light bg-dark">
    <div class="container-fluid text-white">
      <a class="navbar-brand text-white">
        <h1>MyStore</h1>
      </a>

      <span>
        <i class="fas fa-user-tie"></i> <!-- Corrected FontAwesome icon classes -->
          Hello,  <?php echo $_SESSION['admin']; ?>   
        <i class="fas fa-right-from-bracket"></i>
        <a href="product/form/logout.php" class="text-decoration-none text-white"> Logout</a>
        <!-- Removed empty href, you can add a real link for UserPanel if needed -->
        <a href="#" class="text-decoration-none text-white"> UserPanel</a> 
      </span>
    </div>
  </nav>

  <div>
    <h2 class="text-center">Dashboard</h2>
  </div>

  <div class="col-md-6 bg-danger text-center m-auto">
    <a href="product/index.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Add Post </a>
    <a href="user.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Users </a> <!-- Added href="#" as a placeholder -->
  </div>

</body>
 
</html>
