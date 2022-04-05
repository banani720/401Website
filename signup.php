<?php
    $con = mysqli_connect('localhost', 'root', 'Emsrocks!!97', 'contracts');
    $username = $_POST("['username']");
    $password = $_POST("['password']");
    
    $sql = "INSERT INTO `business_user` (`username`, `password`) VALUES ('$username', '$password');";

    $rs = mysqli_query($con, $sql);

    if ($rs) {
        echo "User added!";
    }
    ?>