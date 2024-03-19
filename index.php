<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "./functions.php";

$newPassword = '';

if(isset($_GET['passwordLength'])) {
    $passwordLength = $_GET['passwordLength'];
    $newPassword = generatePassword($passwordLength);
}


?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Password-Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body data-bs-theme="dark">

    <div class="container p-5">
        <h1>PASSWORD GENERATOR</h1>

        <form action="index.php" method="GET" class="mb-3">
            <label for="passwordLength">Scegli il numero di caratteri:</label>
            <input type="number" id="passwordLength" name="passwordLength" min="8" max="25" required>
            <button type="submit">Genera</button>
        </form>

        <?php if (!empty($newPassword)) { ?>
            <div class="card p-5">
                <h2>Password generata:</h2>
                <p><?php echo $newPassword; ?></p>
            </div>
        <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>