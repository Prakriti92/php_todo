 <?php
    include('tododb.php');
    $task= $_POST['title'];
    // $mysql = "INSERT INTO `todo` (`id`, `title`) VALUES ('$id', '$title')";
    // $result = mysqli_query($conn,$mysql);
    // if($result){
    //     header("location: ./todolist.php");   
    // }
    
$mysql = "INSERT INTO `todo` (`id`, `task`) VALUES ('$id', '$task')";
if($conn->query($mysql)==true){
    echo("Successfully Inserted");
    header('Location: /todolist.php');
    exit();

}

?> 