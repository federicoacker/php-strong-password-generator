<?php
$uppercase_letters = range("A", "Z");
$lowercase_letters = range("a", "z");
$numbers = range("0", "9");
$symbols = range("!", "/");
$letters = [];


$uppercase_requested = false;
$lowercase_requested = false;
$numbers_requested = false;
$symbols_requested = false;


if (isset($_GET["include_uppercase"]) && $_GET["include_uppercase"] == "on") {
    $uppercase_requested = true;
}
if (isset($_GET["include_lowercase"]) && $_GET["include_lowercase"] == "on") {
    $lowercase_requested = true;
}
if (isset($_GET["include_numbers"]) && $_GET["include_numbers"] == "on") {
    $numbers_requested = true;
}
if (isset($_GET["include_symbols"]) && $_GET["include_symbols"] == "on") {
    $symbols_requested = true;
}


$password_length = 0;

if (
    isset($_GET["password_length"]) &&
    is_numeric($_GET["password_length"]) &&
    $_GET["password_length"] > 0 &&
    $_GET["password_length"] <= 100
) {
    $password_length = $_GET["password_length"];
}

function create_password(int $length = 0, array $letters = []): string
{
    $password = "";
    for ($i = 0; $i < $length; $i++) {
        $password .= $letters[rand(0, array_key_last($letters))];
    }

    return $password;
}

if ($uppercase_requested) {
    $letters = array_merge($letters, $uppercase_letters);
}
if ($lowercase_requested) {
    $letters = array_merge($letters, $lowercase_letters);
}
if ($numbers_requested) {
    $letters = array_merge($letters, $numbers);
}
if ($symbols_requested) {
    $letters = array_merge($letters, $symbols);
}


?>