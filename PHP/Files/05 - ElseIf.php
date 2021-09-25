<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ElseIf</title>
</head>
<body>
    <?php
        if (isset($_POST['idade'])) {
            $idade = $_POST['idade'] . PHP_EOL;

            if ($idade < 18) {
                echo "< 18" . PHP_EOL;
            } elseif ($idade >= 18 and $idade < 60) {
                echo ">= 18 and < 60" . PHP_EOL;
            } else {
                echo ">= 60" . PHP_EOL;
            }
        }
    ?>
<form method="POST">
    <label>
        <input type="number" name="idade">
    </label>
    <input type="submit">
</form>
</body>
</html>