 <?php
include_once "connection.php";
if(isset($_POST['submit'])){
    $username = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $exits = False;
    $sql = "INSERT INTO register (username, email, password) VALUES ('{$username}', '{$email}', '{$password}')";
    $result = mysqli_query($conn,$sql);
    echo $result;
    if($result){
        // echo "sucess";
        header("Location: welcome.php");
    }
} else {
    echo "failed";
}
?>

