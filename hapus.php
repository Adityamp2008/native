<?php
include 'config.php';
 
if(isset($_GET['id'])){
    $id = $_GET['id'];
   
    $sql ="DELETE FROM data WHERE id = '$id'";
    if($conn->query($sql)){
        header("location: index.php");
        exit();
    }

}