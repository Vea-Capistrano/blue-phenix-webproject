<?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cipher= password_hash( $password, PASSWORD_DEFAULT);

        echo "Plain Password: $password <br>";
        echo "Cipher Password: $cipher <br>";

        $decrypted = password_verify($password, $cipher);

        echo "Decrypted Password: $decrypted <br>";
    }
?>