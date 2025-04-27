<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">Firstname?</label>
            <input type="text" id="firstname" name="firstname" placeholder="Firstname">
            
            <label for="lastname">Lastname?</label>
            <input type="text" id="lastname" name="lastname" placeholder="Laststname">
            
            <label for="favoritepet"favoritepet?</label>
            <select name="favoritepet" id="favoritepet">
                <option value="none">None</option>
                <option value="dog">dog</option>
                <option value="cat">cat</option>
                <option value="bird">bird</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>