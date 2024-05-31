<?php
session_start();
    include('tododb.php');



    $task = $_POST['title'];
    $userId = $_SESSION['user_id'];
    $mysql = "INSERT INTO `todo` (`user_id`, `task`) VALUES ('$userId', '$task')";
    if($conn ->query($mysql)==true){
        echo("Successfully Inserted");
        header('Location: /todolist.php');
        exit();
    }
?>
