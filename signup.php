<?php
if(isset($_POST['name'])){
    include ('connectiondb.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Contact = $_POST['contact'] ;
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    // $Confirm_password = $_POST['confirm_password'];

    $sql = "INSERT INTO `form_php` (`Name`, `Email`, `Password`, `Contact No.`) VALUES ('".$name."', '".$email."', '".$password."', '".$Contact."');" ;
      

    if($con -> query($sql)==true){
        echo"Successfully inserted";
        header('Location: /login.php');
        exit();
    
    }
    else{
        echo"ERROR : $sql <br> $con->error";
    }
    $con->close();
 }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form php</title>
    <link rel="stylesheet" href="signup-style.css">
    <!-- <style type="text/css">@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&family=Rubik:wght@300;400;600;700&display=swap'); -->



    </head>
    <body>
        <div class="container">
            
            <form action="signup.php" id="form" class="form" method="post">
                <h2>Register Here</h2>

            <div class="form-control">
                <label for="username">Username:</label>
                <input type="text" id="name" placeholder="Enter Username" name="name"/>
                <span style="color:red "id ="name_error"></span>
            </div>
            <div class="form-control">
                <label for="Email">Email:</label>
                <input type="email" id ="email" placeholder="Enter Email" name="email" />
                <span style="color:red" id ="email_error"></span>

            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password"id ="password" placeholder="Enter Password" name="password" />
                <span style="color:red" id ="password_error"></span>
            </div>

                <div class="form-control">
                    <label for="Confirm Password">Confirm Password</label>
                    <input type="password"id ="confirm_password" placeholder="Enter confirm password" name="confirm_password" />
                    <span style="color:red" id ="confirm_password_error"></span>

                </div>   

            <div class="form-control">
                <label for="Contact">Contact No</label>
                <input type="number"id ="contact" placeholder="Enter Contact number" name="contact" />
                <span style="color:red" id ="number_error"></span>

            </div> 
           <div>
            <button type="submit" class="formbutton">Submit</button>
           </div> 
            </form>

        </div>

    <script src="index.js"></script>


    </body>
</html>



















