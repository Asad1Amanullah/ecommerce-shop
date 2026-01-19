<?php

$servername = getenv("DB_HOST");
$username   = getenv("DB_USER");
$password   = getenv("DB_PASS");
$db         = getenv("DB_NAME");

// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>
