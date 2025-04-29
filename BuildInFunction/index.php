<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        $string = "Hello World";
        $number = -5.5;

        echo strlen($string);
        echo "<br>";
        echo stripos($string, "o");
        echo "<br>";
        echo str_replace("World", 'Gias', $string);
        echo "<br>";
        echo strtolower($string);
        echo "<br>";
        echo strtoupper($string);
        echo "<br>";
        echo substr($string, 2, -2);
        echo "<br>";
        print_r(explode(" ", $string));
        echo "<br>";
        echo abs($number);
        echo "<br>";
        echo round($number);
        echo "<br>";
        echo pow(2, 3);
        echo "<br>";
        echo sqrt(16);
        echo "<br>";
        echo rand(1, 100);
        ?>
    </div>

    <div>
        <?php

        ?>
    </div>
</body>

</html>