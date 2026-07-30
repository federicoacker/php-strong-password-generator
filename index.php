<?php
require_once "./functions.php";

session_start();
if (array_key_last($letters) != 0) {
    $_SESSION["password"] = create_password($password_length, $letters);
} else {
    $_SESSION["password"] = "";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <form action="" class="container-fluid d-flex flex-column">

        <div class="form-control">
            <label for="password_length">Lunghezza della password</label>
            <input id="password_length" name="password_length" type="number" min="0" max="100">
        </div>

        <div class="form-control">
            <label for="include_uppercase">Includi caratteri maiuscoli</label>
            <input id="include_uppercase" name="include_uppercase" type="checkbox">
        </div>

        <div class="form-control">
            <label for="include_lowercase">Includi caratteri minuscoli</label>
            <input id="include_lowercase" name="include_lowercase" type="checkbox">
        </div>
        <div class="form-control">
            <label for="include_numbers">Includi numeri</label>
            <input id="include_numbers" name="include_numbers" type="checkbox">
        </div>
        <div class="form-control">
            <label for="include_symbols">Includi caratteri speciali</label>
            <input id="include_symbols" name="include_symbols" type="checkbox">
        </div>



        <button>Genera Password</button>
    </form>
    <a href="./result.php">Visualizza la password</a>
    <?php

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>