<?php
//CONEXÃO
require_once 'dbConect.php';

//SESSÃO
session_start();

//BOTÃO ENTRAR
if(isset($_POST['btn_entrar'])){
    //Array para mostrar se existir algum erro.
    $erros = [];

    //Validação com uma função SQL.
    $login = mysqli_escape_string($conexao, $_POST['login']);
    $senha = mysqli_escape_string($conexao, $_POST['senha']);

    if(empty($login) or empty($senha)){
        $erros[] = '<li> o campo login/senha precisa ser preenchido. </li>';
    }
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <?php
        if(!empty($erros)){
            foreach($erros as $erro){
                echo $erro;
            }
        }
    ?>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        login <input type="text" name="login"><br>
        senha <input type="password" name="senha"><br>

        <button type="submit" name="btn_entrar">
            Entrar
        </button>
    </form>
</body>
</html>