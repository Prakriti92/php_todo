
<?php
// session_start();


$server = "localhost";
$username = "root";
$password="";
$database="form_php";
$conn = mysqli_connect($server,$username,$password,$database);


    if(!$conn){
        die("Connection failed due to". mysqli_connect_error());
    
    }
   
    // else{
    //     echo" Database Connection ";
    // }
    // var_dump($_SESSION);
    // exit();

    // $userId = $_SESSION['user_id'];
    // $mysql = "INSERT INTO `todo` (`user_id`, `task`) VALUES ('$userId', '$task')";
    // if($conn ->query($mysql)==true){
    //     echo("Successfully Inserted");
    //     header('Location: /todolist.php');
    //     exit();
    // }
?>
