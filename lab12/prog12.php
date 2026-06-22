<!DOCTYPE html>
<html>
<head>
<title>Login Authentication</title>

<style>
body{
    font-family: Arial;
    text-align: center;
    background-color: lightgray;
}

form{
    background-color: white;
    width: 300px;
    margin: auto;
    padding: 20px;
    border: 1px solid black;
}

input{
    margin: 10px;
    padding: 5px;
}

button{
    padding: 8px;
}
</style>

</head>

<body>

<h2>Login Form</h2>

<form method="POST">

Username:
<br>
<input type="text" name="username">

<br>

Password:
<br>
<input type="password" name="password">

<br>

<button type="submit">Login</button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $uname = $_POST["username"];
    $pass = $_POST["password"];

    $file = fopen("loginDetails.txt","r");
    $data = fgets($file);

    if($data == $uname.":".$pass)
    {
        echo "<h3 style='color:green'>Login Successful</h3>";
    }
    else
    {
        echo "<h3 style='color:red'>Invalid Username or Password</h3>";
    }

    fclose($file);
}

?>

</body>
</html>