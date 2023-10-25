<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "krupal";
    $conn = mysqli_connect($servername,$username,$password,$db_name);
    if(!$conn){
        die("Connection Failed".$conn->connect_error);
    } else {
        // echo "done";
    }
?>