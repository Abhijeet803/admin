
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php

$con = mysqli_connect('localhost','root','','ecommerce');
$Record = mysqli_query($con,"SELECT * FROM `tbluser` ")

    ?>
    
<table class="table table-secondary table-bordered">
    <thead class="text-center">
        <th>S.NO</th>
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>Delete</th>
        

<tr></tr>


    </thead>

    <tbody class="text-center text-danger">

    <?php
 while ( $row = mysqli_fetch_array(($Record))){
    echo "

    <tr>
    <td></td>
    <td>$row[UserName]</td>
    <td>$row[Email]</td>
    <td>$row[Number]</td>
    <td><a href='' class='btn btn-outline-danger'>Delete</a></td>
  </tr>

  ";
 }




    ?>
    </tbody>
</table>

<div>
    <h3>Total</h3>
    <h1></h1>
</div>

</body>
</html>




