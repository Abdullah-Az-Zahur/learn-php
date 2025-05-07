<?php

// $sensitiveData = "Gias";
// $salt = bin2hex(random_bytes(16));
// $pepper = "ASecretePepperString";

// echo "<br> $salt";

// $dataToHash = $sensitiveData . $salt . $pepper;
// $hash = hash("sha256", $dataToHash);

// echo "<br> $hash";

// ------

$pwdSignup = "Gias";

$options = [
    'cost' => 12
];
$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

$pwdLogin = "Gias";

if (password_verify($pwdLogin, $hashedPwd)) {
    echo "They are the same!";
} else {
    echo "The are not the same!";
}
