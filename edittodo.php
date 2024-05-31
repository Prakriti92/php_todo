<?php
    
    // session_start();
    include ('nav.php');
    if (!isset($_SESSION['user_id'])){
        header('location:/login.php');
    }
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include('tododb.php');
    // $value = $_GET['value'];
    // $id = $_GET['todo_id']; 
    // var_dump($value);
    // exit();
    $value = $_POST['title'];
    $id = $_POST['todo_id'];
    $sql = "UPDATE todo SET task = '$value' WHERE id = '$id'";
    $result = $conn->query($sql);
    $conn->close();
    header('location: /todolist.php');
    exit();
   }
   if(!($_SERVER['REQUEST_METHOD']=='GET' & isset($_GET['id'])))
   {
        header('location:/todolist.php');

   }

   

   // UPDATE `todo` SET `task` = 'visit narayani' WHERE `todo`.`id` = 26;

// UPDATEtable_name
// SETcolumn1=value1,column2=value2, ...
// WHEREcondition;

// UPDATE Customers
// SET ContactName = 'Alfred Schmidt', City = 'Frankfurt'
// WHERE CustomerID = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="todolist-style.css">
</head>
<body>
    <h2>Edit Page</h2>
   <div >
   <form action="edittodo.php" method="post"  autocomplete="off">
    <label for="title">Edit-Task:</label>
    <input type="text" name="todo_id" value="<?php echo $_GET['id']; ?>" hidden>
    <input class="form-control" type="text" name ="title" id="title" required placeholder="Edit Your Todo Task" value="<?php echo $_GET['task' ]; ?>">
    <button class="btn">Edit ToDo</button>
</form>
    <div>
</body>
</html>
