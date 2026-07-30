<?php
session_start();
$password = "";
if(isset($_SESSION["password"]) && strlen($_SESSION["password"]) > 0){
    $password = $_SESSION["password"];
}
else{
    $password = "Non hai selezionato nessuna opzione per creare una password";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>

<body>
    <h1>La tua password è:<br>

        <?php
            echo $password;
        ?>
    </h1>
</body>

</html>