<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $name =  "Gias";
    $age = 27;
    $money = 2000.50;
    $salary = null;
    $isMarried = false;

    echo "Hello World <br>";
    echo "Hello " . $name . "!<br>";
    echo "Hello {$name}!<br>";

    print_r($name);
    echo "<br>";
    var_dump($name);
    echo "<br>";

    $str = "Hello World!";
    echo strtolower($str) . "<br>";
    echo strtoupper($str) . "<br>";
    echo str_replace("World", "Gias", $str) . "<br>";

    $x = 10;
    $y = 20;
    echo $x + $y;
    echo "<br>";
    echo $x - $y;
    echo "<br>";
    echo $x * $y;
    echo "<br>";
    echo $x ** $y;
    echo "<br>";
    $y++;
    echo $y . "<br>";
    $y--;
    echo $y . "<br>";

    $user = [
        "name" => "Gias",
        "age" => 27,
        "hobbies" => ["coding", "football", "reading"],
    ];
    echo $user["name"] . "<br>";
    echo "<pre>";
    var_dump($user);
    echo "</pre>";

    for ($i = 0; $i <= 10; $i++) {
        echo $i . " ";
    }

    echo "<br>";

    $fruits = ["apple", "banana", "orange", "mango"];
    foreach ($fruits as $fruit) {
        echo $fruit . " ";
    }

    echo "<br>";

    function sayHello()
    {
        echo "Hello World!";
    }
    sayHello();

    echo "<br>";

    function greet($name = "Guest")
    {
        echo "Hello {$name}!";
    }
    greet("Gias");
    echo "<br>";
    greet("Ali");
    echo "<br>";
    greet();
    echo "<br>";

    function multiply($a, $b)
    {
        return $a * $b;
    }

    $result = multiply(10, 20);
    echo $result . "<br>";

    ?>
</body>

</html>