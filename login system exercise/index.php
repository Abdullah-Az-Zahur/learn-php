<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Login</h3>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" id="" placeholder="Username" required>
        <input type="password" name="pwd" id="" placeholder="Password" required>
        <button type="submit" name="submit">Login</button>
    </form>
    
    <h3>Sign Up</h3>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="username" placeholder="User Name">
        <input type="password" name="pwd" placeholder="Password">
        <input type="email" name="email" placeholder="E-Mail">
        <button type="submit">Sign Up</button>
    </form>
</body>

</html>