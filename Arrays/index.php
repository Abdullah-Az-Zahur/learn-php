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
        $fruits = ["Apple", "Banana", "Cherry"];
        echo $fruits[1];
        echo "<br>";
        $fruits[1] = "Orange";
        echo $fruits[1];
        echo "<br>";
        // unset($fruits[1]);
        array_splice($fruits, 0, 1);
        echo $fruits[1];
        echo "<br>";

        ?>
    </div>

    <div>
        <?php
        $tasks = [
            "laundry" => "Gias",
            "trash" => "Abdullah",
            "vacuum" => "Bella",
            "dishes" => "Ali",
        ];

        $fruits = ["Apple", "Banana", "Cherry"];

        echo $tasks["laundry"];
        echo "<br>";
        print_r($tasks);
        echo "<br>";
        echo count($tasks);
        echo "<br>";
        sort($tasks);
        print_r($tasks);
        echo "<br>";
        array_push($fruits, "Mango");
        print_r($fruits);
        $tasks["dusting"] = "Tara";
        echo "<br>";
        print_r($tasks);

        array_splice($fruits, 2, 0, "Lichi");
        echo "<br>";
        print_r($fruits);
        echo "<br>";
        ?>
    </div>
    <div>
        <?php
        $food = [
            "fruits" => ["jackfruit", "watermelon"],
            "meats" => ["chicken", "fish", "sheep"],
            "vegetables" => ["cucumber", "carrots"],
            "Apple",
            "Banana",
            "Cherry"
        ];

        echo $food["vegetables"][0];
        ?>
    </div>
</body>

</html>