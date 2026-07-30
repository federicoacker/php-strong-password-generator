<?php
$letters = array_merge(
    range("A", "Z"),
    range("a", "z"),
    range("0", "9"),
    range("!", "/")
);

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
    for($i = 0 ; $i < $length ; $i++){
        $password .= $letters[rand(0, array_key_last($letters))];
    }

    return $password;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>

<body>
    <form action="">
        <label for="password_length">Lunghezza della password</label>
        <input id="password_length" name="password_length" type="number" min="0" max="100">
        <button>Genera Password</button>
    </form>

</body>

</html>