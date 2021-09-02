<?php
session_start();
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'POST'){
    include '_connectdb.php' ;
    $name = $_POST['addlinktitle'];
    $url = $_POST['addlinkurl'];
    $uid = $_SESSION['sno'];

    // check whether the user already exist
    // <label> must be replaced with respective labels according to your database      
    $sql = "INSERT INTO `<table name>` (`<link title>`,`<link url>`, `<link id>`) VALUES ('$name','$url', '$uid')" ;
    $result = mysqli_query($conn, $sql);
        if($result){
            $add = true;
        }
}
    header("Location: ../mylinks.php");
            exit();
?>
