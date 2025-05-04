<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userSearch = $_POST["usersearch"];

    try {
        require_once "includes/dbh.inc.php";

        $query = " SELECT * FROM comments WHERE username = :userSearch ;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":userSearch", $userSearch);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
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
    <section>
        <h3>Search Results :</h3>
        <?php
        if (empty($results)) {
            echo "<div>
                <p>There where no result</p>
            </div>";
        } else {
            // echo "<pre>";
            // var_dump($results);
            // echo "</pre>";

            foreach ($results as $row) {
                echo "<div>";
                echo "<h4>" . htmlspecialchars($row["username"]) . "</h4>";
                // echo "<br>";
                echo "<p>" . htmlspecialchars($row["comment_text"]) . "</p>";
                // echo "<br>";
                echo "<p>" . htmlspecialchars($row["crated_at"]) . "</p>";
                // echo "<br>";
                echo "</div>";
            }
        }
        ?>
    </section>

</body>

</html>