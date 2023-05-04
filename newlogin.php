<?php
session_start();
include("connection.php");
include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        // SOMETHING WAS POSTED
        $username = $_POST['username'];
        $Password = $_POST['password'];

        if(!empty($username) && !empty($Password))
        {
            // save to database
            $query = "insert into users (username, Password) values('$username', '$Password')";   

            mysqli_query($con, $query);

            header("Location: localhost/cybersecurity/userlogin.php");
            die;
        }else
        {
            echo "Please Enter Information.";
        }
    }
?>

<!DOCTYPE html>
<html>
<body>
<form action="process_signup.php" method="post"> 
<div class="formContainer">
<h1>Sign Up Form</h1>
<hr>
<label for="Username"><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="username" required>
<label for="password"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="password" required>
<label>
<input type="checkbox" checked="checked" name="remember" style="margin: 15px"> Remember me
</label>
<div>
<button type="button" class="cancel">Cancel</button>
<button type="submit" class="signup">Sign Up</button>
</div>
</div>
</form>
</body>
</html>