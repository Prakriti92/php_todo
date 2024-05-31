    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo_list_app</title>
    <link rel="stylesheet" href="todolist-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <?php include('nav.php'); ?>
    <h2>Welcome to ToDo List</h2>
   <div >
   <form action="inserttodo.php" method="post"  autocomplete="off">
    <label for="title">Task:</label>
    <input class="form-control" type="text" name ="title" id="title" required placeholder="Enter Task To Add In Todo">
    <button class="btn">Add ToDo</button>
</form>
    <div>
        <?php 
            include('selecttodo.php');
        ?>
        <h3>Your Lists</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Task</th>
                    <th>Action</th>
                </tr>

            </thead>
            <tbody>
                <?php
                foreach ($row as $data)
                {
                    // var_dump($data);
                 echo '<tr>
                <td>'.$data[0].' </td>
                <td> '.$data[2].' </td>
                <td>
                <a href="edittodo.php?id='.$data[0].'&task='.$data[2].'" ><i  class="fa-regular fa-pen-to-square"></i></a>
                <a href="deletetodo.php?id='.$data[0].'"> <i class="fa-solid fa-trash"></i> </a>
                </td>
            </tr>';

            }
            exit();
              ?>

            
           
        </table>
    </div>

   </div>
</body>
</html>
    
    