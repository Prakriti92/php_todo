<?php session_start(); ?><link rel="stylesheet" href="nav-style.css">
<nav>
        <ul class = "navbar">
            <li><a href="/">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <!-- <li><a href="#">Logout</a></li>  -->
            <?php if(isset($_SESSION['user_id']))
            {
                echo '<li><a href="/logout.php">Logout</a></li>';
            }
            else
            {
                echo '<li><a  href="/login.php">Login</a></li>
                <li><a  href="/signup.php">Signup</a></li>';
            }
            ?>
        </ul>
</nav>
<!-- <h1>Index Page</h1> -->
