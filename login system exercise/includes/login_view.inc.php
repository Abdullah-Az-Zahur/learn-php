<?php

declare(strict_types=1);

function output_username()
{
    if (isset($_SESSION['user_id'])) {
        echo "<p style='color:green;'>Welcome, " . htmlspecialchars($_SESSION['user_username']) . "</p>";
    } else {
        echo "<p style='color:red;'>You are not logged in!</p>";
    }
}

function  check_login_errors()
{
    if (isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];
        echo "<br>";
        foreach ($errors as $error) {

            echo "<p style='color:red;'>$error</p>";
        }

        unset($_SESSION["errors_login"]);
    } elseif (isset($_GET["login"]) && $_GET["login"] === "success") {
        echo "<p style='color:green;'>Login successful!</p>";
    }
}
