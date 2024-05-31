<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
    </head>
    <body>
       <?php
       include('nav.php');
       ?>
       <?php 
    if(!isset($_SESSION['user_id']))
    {
        header('location: login.php');
        exit();
    }
?>
        <h2>Welcome to dashboard</h2>
    <?php if(isset($_SESSION['user_name'])){
        echo '<h1>Hello '.$_SESSION['user_name'].'</h1>';
         }
         include 'todolink.php';
         ?>
        
         
        <!-- <input type="submit" name ="Logout" value="Logout"> -->
        <!-- <a href="logout.php">Logout</a> -->
       
    </body>
    </html>










