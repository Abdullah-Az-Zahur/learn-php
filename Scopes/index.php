<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $test = "Gias";

    function myFunction()
    {
        global $test;

        return $test;
    }
    function myFunction2()
    {
        return $GLOBALS["test"];
    }
    function myFunction3()
    {
        static $staticVar = 0;
        $staticVar++;
        return $staticVar;
    }

    echo myFunction();
    echo "<br>";
    echo myFunction2();
    echo "<br>";
    echo myFunction3();
    echo "<br>";
    echo myFunction3();
    echo "<br>";
    echo myFunction3();
    ?>
</body>

</html>