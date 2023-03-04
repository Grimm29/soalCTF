<?php 

    include('./db.php');

    $user = $_POST['username'];
    $pass = $_POST['password'];

    // echo $user;
    // echo $pass;

    $query = "SELECT * FROM user WHERE email='$user' and password ='$pass'";

    $result = $conn->query($query);

    if ($result->num_rows > 0 && $user = $result->fetch_object())
    {
        echo "sukses";
        header("Location: ./home.php");
    }
    else
    {
        echo "gagal";
        header("Location: ./index.php");
    }

?>