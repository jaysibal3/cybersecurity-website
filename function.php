<?php

function check_login($con)
{

    if(isset($_SESSION['username']))
    {
        $un = $_SESSION['username'];
        $query = "select * from users where username = '$un' limit 1";

        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
    header("Location: userlogin.php");
    die;
}
