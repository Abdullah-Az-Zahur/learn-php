<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <div>
        <?php
        require_once 'Classes/Car.php';

        $car01 = new Car("Volvo", "red");
        echo $car01->getBrand();
        echo "<br>";
        echo $car01->setBrand("BMW");
        echo "<br>";
        $car01->setColor("green");
        echo $car01->getColor();
        echo "<br>";
        echo $car01->getCarInfo();

        ?>
    </div> -->

    <div>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit">Signup</button>
        </form>
    </div>

</body>

</html>