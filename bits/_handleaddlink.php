<?php
session_start();
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'POST'){
    include '_connectdb.php' ;
    $name = $_POST['addlinktitle'];
    $url = $_POST['addlinkurl'];
    $uid = $_SESSION['sno'];

    $sql = "INSERT INTO `links` (`link_title`,`link_url`, `link_id`) VALUES ('$name','$url', '$uid')" ;
    $result = mysqli_query($conn, $sql);
        if($result){
            $add = true;
        }
}
    header("Location: ../mylinks.php");
            exit();
?>
