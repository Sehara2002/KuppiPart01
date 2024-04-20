<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP- Functions</title>
</head>

<body>
    <?php
    function printHello()
    {
        echo "<h1>Hello</h1>";
    }

    //Defining functions with Parameters.
    function adder($x, $y)
    {
        echo $x + $y;
    }

    //Defining functions with return values.
    function subtractor($a, $b)
    {
        return $a-$b;
    }

    function product($x,$y):int{
        return $x*$y;
    }

    echo product(5.1,2.74);

    ?>
</body>

</html>