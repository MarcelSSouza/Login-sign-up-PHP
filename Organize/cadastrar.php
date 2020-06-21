<?php
require_once'usuarios.php';
$u= new Usuario;
?>

                    <html lang="pt-br">
                    <head>
                        <meta charset="utf-8"/>
                        <Title>Organize</Title>
                        <link rel="stylesheet" href="cadastrar.css">
                    </head>
                    <body class="main">
                        <div class="corpo-form">
                        <h1 class="titulo">Cadastrar</h1>
                        <form class="form "method="POST"  >
                            <input name="nome" class="email"type="text" placeholder="Nome Completo" maxlength="50"required>
                            <input name="telefone"class="email" type="text" placeholder="Telefone" maxlength="50"required>
                            <input name="email" class="email"type="email" placeholder="Usuário"maxlength="50"required>
                            <input name="senha" class="email"type="password" placeholder="Senha"maxlength="32" required>
                            <input name="confsenha"class="email" type="password" placeholder="Confirmar senha" maxlength="32"required>
                            <input type="submit" class="acessar" value="CADASTRAR" >
                        </form>
                    </div>

<?php
if (isset( $_POST["nome"]))
{
    $nome = addslashes($_POST["nome"]);
    $telefone= addslashes($_POST["telefone"]);
    $email= addslashes($_POST["email"]);
    $senha= addslashes($_POST["senha"]);
    $confsenha= addslashes($_POST["confsenha"]);
    
    $u->conectar("organize_login", "localhost", "root","");

    if($senha==$confsenha)
    {
    $u->cadastrar($nome,$telefone,$email,$senha);}
    else{echo "As senhas não correspondem";}
}


?>
</body>
</html>