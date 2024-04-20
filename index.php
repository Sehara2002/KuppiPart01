<html>
<head>
    <title>PHP-Sample</title>
</head>
<body>
    <?php
        /*$my_name = "Sehara";
        $number = 10;
        $vehicles = array("Car","Van","Bus");

        echo $my_name;
        echo "<br/>";
        echo $number."<br/>";
        echo "<br/>";
        echo var_dump($my_name);
        echo "<br/>";
        echo gettype($number);
        settype($number,"string");
        echo "<br/>";
        echo gettype($number);*/
    ?>

    <?php
        /*$txt = "a";
        $txt2 = "b";

        for($c = 0;$c<=10;$c++){
            $txt.=$txt2;
            echo $txt."<br/>";
        }*/
    ?>

    <?php
        /*$x = 85;
        if($x<=50){
            echo "Yes it is less than 50";
        }else if($x<=70){
            echo "It is greater than 50 but less than 70";
        }else if($x<=90){
            echo "It is greater than 70 but less than 90";
        }else{
            echo "No, It is greater than 90";
        }*/


        /*$answer = "";
        ($x<=50)?$answer = "Yes it less than 50":$answer="No it greater than 50";
        echo $answer;*/
    ?>

    <?php
        /*$x = 4;
        switch($x){
            case 1:
                echo "Yes it is one";
                break;
            case 2:
                echo "Yes it is two";
                break;
            case 3:
                echo "Yes it is three";
                break;
            default:
                echo "It is not 1,2 or 3";
        }*/
    ?>

    <?php
        /*$i = 0;
        while($i<=10){
            echo "<h1>{$i}</h1>";
            $i++;
        }
        
        for($c = 0;$c<=10;$c++){
            echo $c."<br/>";
        }
        */

        $names = array("Saman","Sunil","Kamal","Nimal","Amal");
        foreach($names as $item){
            echo "<h2>{$item}</h2>";
        }

    ?>

    <h1>This is H1 Tag</h1>
</body>
</html>
