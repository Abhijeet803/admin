<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace border border-info">

                <p class="text-warning  text-center fs-3 fw-bold my-3">User Register</p>
                <form action="insert.php" method="POST">
                    <div class="mb-3">
                        <label for="">UserName :</label>
                        <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">UserEmail :</label>
                        <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">UserNumber :</label>
                        <input type="number" name="number" placeholder="Enter Your Number" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">UserPassword :</label>
                        <input type="password" name="password" placeholder="Enter Your Password" class="form-control">
                    </div>
                    <div class="mb-3">
                         <button name="submit" class="w-100 bg-warning fs-4 text-white">REGISTER</button> 
                        
                    </div>

                    <div class="mb-3">
                        <button class="w-100 bg-danger fs-4 text-white"> <a href="login.php" class="text-decoration-none text-white">ALREADY ACCOUNT</a> </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>