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
        
        $erros = [];

        if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)){
            $erros[] = 'idade incorreto';
        } 
        if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
            $erros[] = 'email incorreto';
        }
        if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)){
            $erros[] = 'peso incorreto';
        }
        if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)){
            $erros[] = 'ip incorreto';
        }
        if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)){
            $erros[] = 'url incorreto';
        }  

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
        <label for="idade_id">
            Idade <input type="text" name="idade" id="idade_id">
        </label><br>
        <label for="email_id">
            Email <input type="text" name="email" id="email_id">
        </label><br>
        <label for="peso_id">
            Peso <input type="text" name="peso" id="peso_id">
        </label><br>
        <label for="ip_id">
            Ip <input type="text" name="ip" id="ip_id">
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