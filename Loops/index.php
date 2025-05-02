<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for ($i = 0; $i <= 10; $i++) {
        // echo "This is iteration number " . $i . "<br>";
        echo "This is iteration number $i <br>";
    }

    $test = 5;
    while ($test < 10) {
        echo "$test <br>";
        $test++;
    }

    $fruits = ["Apple" => "Red", "Banana" => "Yellow", "Orange" => "Orange"];

    foreach ($fruits as $fruit => $color) {
        echo "This $fruit color is $color <br>";
    }

    ?>
</body>

</html>