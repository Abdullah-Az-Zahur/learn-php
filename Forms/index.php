<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);

    if ($name && $email && $phone) {
        echo "contact Added : $name ($email , $phone)";
    } else {
        echo "Invalid Input";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" id="">

        <label for="email">Email</label>
        <input type="text" name="email" id="">

        <label for="phone">Phone</label>
        <input type="tel" name="phone" id="">

        <label for="image">Image</label>
        <input type="file" name="image" id="" accept="image/*">

        <button type="submit">Add Contact</button>
    </form>
</body>

</html>