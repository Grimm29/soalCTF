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
    
    <img src="./surprised-pikachu.gif" alt="" id="pikachu">
    
    <div class="container">
        <p class="d-flex justify-content-center">HTML Indexing.</p>
        
        <?php
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

            $id = substr($actual_link,46);
            
            $query = "SELECT * FROM user WHERE id = '$id'";
            $stmts = mysqli_query($conn, $query);
            $obj = mysqli_fetch_object($stmts);
        ?>

        <div class="d-flex justify-content-center">
            <div class="tableData" style="width: 100vh; display:flex;">
                <table class="table" style="border-color: white;">
                    <tbody>
                        <tr>
                            <td style="width: 15vh;">Id</td>
                            <td style="width: 70vh;">: <?php echo $obj->id;?></td>
                            <td><button class="btn btn-warning">Edit</button></td>
                        </tr>
                        <tr>
                            <td style="width: 15vh;">Nama</td>
                            <td style="width: 70vh;">: <?php echo $obj->nama;?></td>
                            <td><button class="btn btn-warning">Edit</button></td>
                        </tr>
                        <tr>
                            <td style="width: 15vh;">Email</td>
                            <td style="width: 70vh;">: <?php echo $obj->email;?></td>
                            <td><button class="btn btn-warning">Edit</button></td>
                        </tr>
                        <tr>
                            <td style="width: 15vh;">Password</td>
                            <td style="width: 70vh;">: <?php echo $obj->password;?></td>
                            <td><button class="btn btn-warning">Edit</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

</body>
</html>