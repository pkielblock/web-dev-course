<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Login</title>
</head>
<body>
    <?php
        $login = "pedro";
        $senha = "123";

        if (isset($_POST['login'])){
            if ($_POST['login'] == $login && $_POST['senha'] == $senha){
                echo "Login Efetuado Com Sucesso." . PHP_EOL;
            } else {
                echo "Login e/ou Senha Inválido(s)" . PHP_EOL;
            }
        }
    ?>

    <form method="POST">
        <input type="text" name="login">
        <input type="password" name="senha">
        <input type="submit">
    </form>
</body>
</html>