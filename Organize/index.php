<?php
require_once './usuarios.php';
$u = new Usuario;
?>


<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <Title>Organize</Title>
    <link rel="stylesheet" href="index.css">
</head>

<body class="main">
    <div class="corpo-form">
        <h1 class="titulo">Login</h1>
        <form class="form" method="POST">
            <input class="email" name="email" type="email" placeholder="email" required maxlength="50">
            <input class="senha" name="senha" type="password" placeholder="Senha" required maxlength="32">
            <input class="acessar" type="submit" value="ACESSAR">
            <a class="cadastrar" href="cadastrar.php">Cadastre-se</a>
    </div>
        </form>
        <?php
        if (isset($_POST["email"])) {
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $u->conectar("organize_login", "localhost", "root", "");
            if ($u->logar($email, $senha)) {
                header("location: organize.php");
            } else {
                echo "<h3>Revise os seus dados!</h3>";
            }
        }


        ?>
    </div>


</body>

</html>