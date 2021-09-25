<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Par Impar</title>
</head>
<body>
    <?php
        if (isset($_POST["num"])){
            echo $_POST["num"] . PHP_EOL;

            $num = $_POST["num"];

            if ($num % 2 == 0){
                echo "Par" . PHP_EOL;
            } else {
                echo "Impar" . PHP_EOL;
            }
        }
    ?>
<form method="POST">
    <input type="number" name="num">
    <input type="submit">
</form>
</body>
</html>