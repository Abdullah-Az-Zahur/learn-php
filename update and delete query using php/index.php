<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Change Account</h3>
    <form action="includes/userUpdate.inc.php" method="post">
        <input type="text" name="username" placeholder="User Name">
        <input type="password" name="pwd" placeholder="Password">
        <input type="email" name="email" placeholder="E-Mail">
        <button type="submit">Update</button>
    </form>

    <h3>Delete Account</h3>
    <form action="includes/userDelete.inc.php" method="post">
        <input type="text" name="username" placeholder="User Name">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit">Delete</button>
    </form>
</body>

</html>