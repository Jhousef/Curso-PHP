<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <?php
    /* Validações
    Funções (filter_input - filter_var)
    FILTER_VALIDATE_INT
    FILTER_VALIDATE_EMAIL
    FILTER_VALIDATE_FLOAT
    FILTER_VALIDATE_IP
    FILTER_VALIDATE_URL
    */
    ?>

    <?php
        // isset - pra saber se o formulário existe.
        if(isset($_POST['enviar_formulario'])){

            // Array de erros.
            $erros = [];
            
            // Validações.
            if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)){
                $erros[] = 'idade precisa ser um inteiro';
            }
            if(!$mail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
                $erros[] = 'email incorreto';
            }
            if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)){
                $erros[] = 'peso incorreto';
            }
            if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)){
                $erros[] = 'ip incorreto';
            }
            if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)){
                $erros[] = 'url incoreto';
            }

            // empty - Determina se uma variavél está vazia.
            // exibindo mensagens.
            if(!empty($erros)){
                foreach($erros as $erro){
                    echo "<li> $erro </li>";
                }
            } else {
                echo 'Parabéns seus dados estão corretos';
            }
        } 

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="nomeId">
            idade <input type="text" id="nomeId" name="idade"><br>
        </label>
        <label for="email_id">
            email <input type="text" id="email_id" name="email"><br>
        </label>
        <label for="peso_id">
            peso <input type="text" id="peso_id" name="peso"><br>
        </label>
        <label for="ip_id">
            ip <input type="text" id="ip_id" name="ip"><br>
        </label>
        <label for="url_id">
            url <input type="text" id="url_id" name="url"><br>
        </label>
        <button type="submit" name="enviar_formulario">Enviar</button>
    </form>

</body>
</html>