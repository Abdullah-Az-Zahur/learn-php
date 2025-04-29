<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>

        <!-- The Codeholic -->
        <!-- <div>
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
        </div> -->



        <!-- Dani Krossing -->
        <!-- operators -->
        <!-- <div>
            <?php
            // $a = "Hello";
            // $b = "World";
            // $c = $a." ".$b;
            // echo $c;

            $a = 4;
            $b = 4;
            $c = 2;
            $d = 6;

            if ($a == $b || $c == $d && $a == $c) {
                echo "this statement is true";
            }
            echo "<br>";
            // echo ++$a;
            echo "<br>";
            echo $a++;
            echo "<br>";
            echo $a;
            echo "<br>";
            echo $b--;
            echo "<br>";
            echo $b;

            ?>
        </div> -->

        <!-- Loop -->
        <div>
            <?php

            $bool = true;
            $a = 1;
            $b = 4;

            $result = match ($a) {
                1, 3, 5 => "variable a is equal to one!",
                2 => "variable a is equal to two!",
            };

            echo $result;

            echo "<br>";

            switch ($a) {
                case 1:
                    echo "The first case correct";
                    break;
                case 3:
                    echo "The second case correct";
                    break;

                default:
                    echo "None of condition were true";
            }

            echo "<br>";

            if ($a < $b && !$bool) {
                echo "First Condition is true!";
            } elseif ($a < $b && $bool) {
                echo "Second Condition is true!";
            } else {
                echo "None of condition were true";
            }
            ?>
        </div>
    </main>
</body>

</html>