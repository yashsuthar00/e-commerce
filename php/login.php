<?php
    include("connection.php");
     if(isset($_POST['submit'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "select * from register where username='{$username}' and password = '{$password}'";
        $result = mysqli_query($conn,$sql);
        // $row = mysqli_fetch_array($result, MYSQL_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
            header("Location: welcome.php");
            
        }
        else{
            
            echo
             '<script>
                window.location.herf = "../index.html";
                alert("Login failed. Invalid username or password!!!");
            </script>';       
            
        }
     }

?>