<?php

    $servername = "34.101.169.170:32768";
    $username = "cyberkid";
    $password = "secret";
    $dbname = "CTF-Inject";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    // echo "Connected successfully";
    
?>
