<?php
session_start();
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'POST'){
    include '_connectdb.php' ;
    $name = $_POST['editlinktitle'];
    $url = $_POST['editlinkurl'];
    $uid = $_POST['editlinksno'];

    $sql = "UPDATE `links` SET `link_title` = '$name', `link_url` = '$url' WHERE `links`.`sno` = $uid " ;
    $result = mysqli_query($conn, $sql);
        if($result){
            $edit = true;
        }
    }
    header("Location: ../mylinks.php");
            exit();
?>
