<?php

declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=J, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function sayHello(string $name = "Abdullah")
    {
        return "Hello $name !";
    }

    function calculator(int $num01, $num02)
    {
        return $result = $num01 + $num02;
    }

    $test = sayHello("Gias");
    echo $test;
    echo "<br>";
    echo calculator(2, 5);
    echo "<br>";
    ?>
</body>

</html>