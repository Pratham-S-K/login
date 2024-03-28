<?php
$username = "prathamsk";
$password = "1234";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $user1 = $_POST["username"];
    $pass1 = $_POST["password"];
    if($user1 == $username && $pass1 == $password)
    {
        header("Location: afterlogin.php?username=$username");
    }
    else{
        $error =" username or password is incorrect";
        header("Location: login.php?error=$error");
    }
}

?>