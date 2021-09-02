<?php
$showError ="false";
$method = $_SERVER['REQUEST_METHOD'];
// ECHO $method;
if($method == 'POST'){
    include '_connectdb.php' ;
    $username = $_POST['loginmail'];
    $pwd = $_POST['pwd'];

    // check whether the user already exist
    $sql ="SELECT * FROM `users` WHERE `username` = '$username'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows == 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pwd, $row['pwd'])){
            session_start();
            $_SESSION['loggedin'] = true ;
            $_SESSION['sno'] = $row['sno'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['username'] = $username ;
            echo "logged in " . $username ;
            
        }
    header("Location: /mlinks");
    }
    header("Location: /mlinks");
}
?>
