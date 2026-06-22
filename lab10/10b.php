<!-- Program 10(b)
Check whether a number is prime or not
-->

<!DOCTYPE html>
<html>
<head>
    <title>Prime Number</title>
</head>

<body>

<h2>Prime Number Checker</h2>

<form method="post">

Enter Number:
<input type="number" name="num">

<input type="submit" value="Check">

</form>

<?php

if(isset($_POST['num']))
{
    $n = $_POST['num'];
    $flag = 1;

    if($n < 2)
        $flag = 0;

    for($i=2; $i<$n; $i++)
    {
        if($n % $i == 0)
        {
            $flag = 0;
            break;
        }
    }

    if($flag)
        echo "<h3>$n is Prime</h3>";
    else
        echo "<h3>$n is Not Prime</h3>";
}
?>

</body>
</html>