<?php
    include('tododb.php');
    $id = $_GET['id'];

    $sql= "DELETE FROM todo WHERE id='$id'";
    $result = $conn->query($sql);
   
    $conn->close();
  
    header('location:/todolist.php');
?>
