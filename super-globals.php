<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global PHP</title>
</head>

<body>
    <?php
    $x = 10;
    function printX(){
        global $y;
        $y = 50;
        $GLOBALS["x"]+=10;
        echo $GLOBALS["x"]."<br/>";
    }

    function printY(){
        echo $GLOBALS["y"]."<br/>";
    }

    printX();
    printY();
    echo $x."<br/>";
    echo $y;

    ?>
</body>

</html>