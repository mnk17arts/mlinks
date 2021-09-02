<?php
$method = $_SERVER['REQUEST_METHOD'];
// ECHO $method;
if($method == 'POST'){
    include '_connectdb.php' ;
    $name = $_POST['name'];
    $username = $_POST['signupmail'];
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];

    // check whether the user already exist
    $existSql ="SELECT * FROM `users` WHERE `username` = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows > 0){
        $showError = "User with this Email Id already exists";
    }
    else{
        if($pwd == $cpwd ){
            $hash = password_hash($pwd, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`name`,`username`, `pwd`, `dt`) VALUES ('$name','$username', '$hash', current_timestamp())" ;
            $result = mysqli_query($conn, $sql);
            // echo $result;
            if($result){
                header("Location: ../index.php");
                exit();
            }
        }
    }
    header("Location: ../index.php?");
}
?>
