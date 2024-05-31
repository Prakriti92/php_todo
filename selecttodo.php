<?php
// session_start();
    include('tododb.php');

    if(!isset($_SESSION['user_id'])){
      header('location:/login.php');
    }
    $userid = $_SESSION['user_id'];
    $query =  " SELECT * FROM `todo` WHERE `user_id` = $userid";
   
    // var_dump($query);
    // exit();
    
    $result = mysqli_query($conn,$query);

   
    // var_dump($result);
    // exit();

    // if(!$result){
    //     die("Invalid query:".$conn->error);
    // }
    // else{
      //read data of each row
      $row = mysqli_fetch_all($result);
    //   while($row = mysqli_fetch_assoc($result))  {
    //     var_dump($row);
    //   }
    //   exit();
    // }
    // mysqli_close($conn);
?>