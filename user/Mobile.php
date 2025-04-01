<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page</title>
    <?php
    include 'header.php';


    ?>
</head>

<body>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">



                <h1 class="text-warning font-monospace text-center my-3">MOBILE</h1>
                <?php

                include 'config.php';
                $Record = mysqli_query($con, "select * from tblproduct");
                while ($row = mysqli_fetch_array($Record)) {

                    $check_Page = $row['PCategory']; // Correct

                    
                      if($check_Page === 'Mobile'){ 


                    echo "
  <div class='col-md-6 col-lg-lg-4 m-auto mb-3 '>
  <div class='card m-auto' style='width: 18rem;'>
  <img src='../admin/product/$row[PImage]' class='card-img-top m-auto' style='width :170px; height : 300px;' >
  <div class='card-body text-center'>
    <h5 class='card-title text-danger fs-4 fw-bold'>$row[PName]</h5>
    <p class='card-text text-danger fs-4 fw-bold'>RS: $row[PPrice]</p>
  <input type='number' value = ' min='1' max ='20''s placeholder = 'Quantity'><br><br>
  <input type='submit' class= 'btn btn-warning text-white w-100' value= 'Add To Cart'>
    
  </div>
</div>
</div>
";

                }
            }
                ?>

            </div>
        </div>
    </div>

</body>

</html>