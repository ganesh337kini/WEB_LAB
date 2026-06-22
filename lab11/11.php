<!DOCTYPE html>
<html>
<head>
<title>Store Information</title>

<style>
body{
    font-family: Arial;
    text-align: center;
    background-color: lightgray;
}

textarea{
    width: 400px;
    height: 100px;
}

button{
    padding: 8px;
    margin: 5px;
}

.saved{
    margin-top: 20px;
    font-size: 20px;
    color: blue;
}
</style>

</head>

<body>

<h2>Information Form</h2>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $info = $_POST["info"];

    $file = fopen("info.txt","w");
    fwrite($file,$info);
    fclose($file);
}

?>

<form method="POST">

<label>Enter Information:</label>
<br><br>

<textarea name="info"></textarea>

<br><br>

<button type="submit">Submit</button>
<button type="reset">Reset</button>

</form>

<div class="saved">

<h3>Saved Information</h3>

<?php

$file = fopen("info.txt","r");

if($file)
{
    while(($line=fgets($file))!==false)
    {
        echo $line."<br>";
    }

    fclose($file);
}

?>

</div>

</body>
</html>


<!-- Program 11
Create HTML page with textbox, submit and reset button.
Store data in a text file and display it.
-->

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Store Information</title>
</head>

<body>

<h2>Enter Information</h2>

<form method="post">

<textarea name="info" rows="5" cols="40"></textarea>
<br><br>

<input type="submit" value="Submit">
<input type="reset" value="Reset">

</form>

<?php

if(isset($_POST['info']))
{
    $data = $_POST['info'];

    file_put_contents("info.txt",$data);

    echo "<h3>Saved Information</h3>";
    echo nl2br($data);
}

?>

</body>
</html> -->