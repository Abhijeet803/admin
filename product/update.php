<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>
    <!-- Bootstrap CDN -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
       
</head>

<body>

<?php

$id = $_GET['Id'];
include 'Config.php';
$Record =mysqli_query($con ,"SELECT * FROM `tblproduct` WHERE Id ='$id '");
$data = mysqli_fetch_array($Record);
?>


    <div class="container">
        <div class="row">
            <div class="col-mid-6 m-auto border border-primary mt-3">


                <form action="update.php" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Product Update </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text"  value="<?php echo $data['PName'] ?>"   name="Pname" class="form-control" placeholder="Enter product name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Price</label>
                        <input type="text"  value="<?php echo $data['PPrice'] ?>" name="Pprice" class="form-control" placeholder="Enter product price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Product Image</label>
                        <input type="file" name="PImage" class="form-control"><br>
                        <img src="<?php echo $data['PImage'] ?>"  alt="" style="height: 100px;">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Page Category</label>
                        <select class="form-select" name="Pages">
                            <option value="Home">Home</option>
                            <option value="Laptop">Laptop</option>
                            <option value="Bag">Bag</option>
                            <option value="Mobile">Mobile</option>
                        </select>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $data['ID'] ?>">
                    <button name=" update" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Update</button>

                </form>

            </div>
        </div>
    </div>


        <!-- PHP UPDATE CODE -->

        <?php

if(isset($_POST['update'])){

    $id = $_POST['id'];
$product_name = $_POST['Pname'];
$product_price = $_POST['Pprice'];
$product_image = $_POST['Pimage'];
$image_loc =$_FILES['Pimage']['tmp_name'];
$image_name = $_FILES['Pimage']['name'];
$img_des ="uploadimage/" . $image_name;
move_uploaded_file($image_loc, "uploadimage/" . $image_name);
$product_category = $_POST['pages'];


include 'Config.php';
mysqli_query($con,"UPDATE `tblproduct` SET `PName`='$product_name',`PPrice`='$product_price',`PImage`='$img_des',`PCategory`='$product_category' WHERE Id = $id");

header("location:index.php");



}

        ?>


</body>

</html>