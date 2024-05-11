<?php
    $servername = "localhost";
    $username = "username";
    $password = "password";

    // Create connection
    $con = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>
