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

    <link rel="stylesheet" href="./ctfFormMethod.css">

    <?php
        include ('./db.php');
    ?>

    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <p class="d-flex justify-content-center">HTML Indexing.</p>
        <table class="table text-center">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Passwd</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $i = 1;

                    $query = "SELECT * FROM user ORDER BY id asc";

                    $stmts = mysqli_query($conn, $query);

                    while($obj = mysqli_fetch_object($stmts))
                    {                
                        if ($obj->id >= 1)
                        {
                ?>
                <tr>
                    <th scope="row"><?php echo $obj->id;?></th>
                    <td><?php echo $obj->nama;?></td>
                    <td><?php echo $obj->password;?></td>
                    <td><?php echo $obj->email;?></td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <form action="./edit.php" method="get">
                                <input type="hidden" id="id" name="id" value="<?php echo $obj->id;?>">
                                <button class="btn btn-warning mx-2">Edit</button>
                            </form>
                            <form action="#">
                                <button class="btn btn-danger mx-2">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php 
                        $i++;
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    
    <div class="d-flex justify-content-center">
        <img src="./helo.jpg" alt="" id="helo">
    </div>

</body>
</html>