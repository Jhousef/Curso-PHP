<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Formulario</title>
</head>

<?php

    if(isset($_POST['env_form'])){
        
        //Array de erros
        $erros = [];

        //Sanitize
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        echo $nome.'<br>';

        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        if(!filter_var($idade, FILTER_VALIDATE_INT)){
            $erros[] = 'idade incorreta';
        }

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $erros[] = 'email incorreto';
        }

        $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
        if(!filter_var($url, FILTER_VALIDATE_URL)){
            $erros[] = 'url incorreto';
        }

        //Exibir mensagem
        
        if(!empty($erros)){
            foreach($erros as $erro){
                echo "<li> $erro </li>";
            }
        } else {
            echo 'os dados estão corretos!';
        }
        

    } 

?>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="nome_id">
            Nome <input type="text" name="nome" id="nome_id">
        </label><br>
        <label for="idade_id">
            Idade <input type="text" name="idade" id="idade_id">
        </label><br>
        <label for="email_id">
            Email <input type="text" name="email" id="email_id">
        </label><br>
        <label for="url_id">
            Url <input type="text" name="url" id="url_id">
        </label><br>

        <button name="env_form">
            Enviar
        </button>

    </form>
</body>
</html>