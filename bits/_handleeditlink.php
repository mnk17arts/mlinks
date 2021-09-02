<?php
session_start();
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'POST'){
    include '_connectdb.php' ;
    $name = $_POST['editlinktitle'];
    $url = $_POST['editlinkurl'];
    $uid = $_POST['editlinksno'];

    // check whether the user already exist
    $sql = "UPDATE `<table name>` SET `<link title>` = '$name', `<link url>` = '$url' WHERE `<table name>`.`<serial label>` = $uid " ;
    $result = mysqli_query($conn, $sql);
        if($result){
            $edit = true;
        }
    }
    header("Location: ../mylinks.php");
            exit();
?>
