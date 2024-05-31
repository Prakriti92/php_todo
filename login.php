




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Login_page</title>
    <link rel="stylesheet" href="login-style.css">
    
</head>
<body>
<?php
    include('nav.php');
    if(isset($_SESSION['user_id']))
    {
        header('location: dashboard.php');
        exit();
    }
    // echo"Welcome ".$_SESSION['user_name'];
    


?>
<div class="center">
    <h1>Login</h1>
   
  
       <div class="form">
       <form action="login.php" method="POST" >
           <input type="text" class="textfield" name="username" placeholder="Username">
           <input type="password" class="textfield" name="password" placeholder="password">
      <div class="forgetpassword"><a href="#" onclick="message()" >Forget Password? </a></div> 
       <input type="submit" name ="Login" value="Login" class="btn">
       <div class="signup">New Member ?<a href="signup.php"class ="link">SignUp Here</a></div>
       </form>
       </div>
       
</div>
   
<script>
    function message()
{
    alert(' Have Forget Your Password? Try To remember!');
}
</script>    
</body>
</html>

<?php
   include('connectiondb.php') ;
   
    if(isset($_POST['Login']))
    {
      $username =  $_POST['username'];
     
      $password =  $_POST['password'];
     


    //   $query ="SELECT * FROM form_php where Name = '$username' && Password = '$password' " ;
    $query ="SELECT * FROM form_php where Name = '$username'" ;
        
   

    $data =  $con->query($query);
    $total = mysqli_num_rows($data);
    // echo $total;
    // die();
        if($total == 1)
        {
            $row = mysqli_fetch_array($data);
            $hashedpassword = $row['Password'];
            // var_dump($row);
            // die();
            if( password_verify($password, $hashedpassword) ){
                echo('Correct Pasword');
                // $_SESSION['loggedin']= true;
                $_SESSION['user_name'] = $username;
                $_SESSION['user_id']= $row['id'];
                // echo"Login Successfully";
                header('Location: dashboard.php');
                exit();
            }
            else{
                echo('Wrong Password');
                die();
            }

            
        }
        else{
            echo"Login Failed";
        }
    }
?>



