<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="./ctfSQLi.css">

    <?php
        include ('./db.php');
    ?>

    <title>Document</title>
</head>
<body>

    <div>
        <img id="gambar" src="./img/cat.jpg">
    </div>
    <div class="container">
        <div class="content d-flex justify-content-center">            
            <div class="card" style="width: 60vh;">
                <div class="card-body">
                    <p class="card-title d-flex justify-content-center">Login</p>
                    
                    <form action="./loginController.php" method="post">
                        <div class="formInput">
                            
                            <div class="formContent my-5">
                                <h5>Username</h5>
                                <input type="text" name="username" id="username" placeholder="Masukan Username">
                            </div>
    
                            <div class="formContent my-5">
                                <h5>Password</h5>
                                <input type="password" name="password" id="password" placeholder="Masukan Password">
                            </div>
                            
                            <div class="d-flex justify-content-center my-3">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>