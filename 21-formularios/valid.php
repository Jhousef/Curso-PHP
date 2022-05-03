<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 

        if(isset($_POST['env_form'])){
            $erros = [];

            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            echo $nome;

            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
            if(!filter_var($idade, FILTER_VALIDATE_INT)){
                $erros[] = $idade . 'está incorreto';
            }else{
                echo $idade;
            }

            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $erros[] = $email . 'está incorreto';
            } else {
                echo $email;
            }

            $peso = filter_input(INPUT_POST, 'peso', FILTER_SANITIZE_NUMBER_FLOAT);
            if(!filter_var($peso, FILTER_VALIDATE_FLOAT)){
                $erros[] = $peso . 'está incorreto';
            } else {
                echo $peso;
            }

            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
            if(!filter_var($url, FILTER_VALIDATE_URL)){
                $erros[] = $url . 'está incorreto';
            } else {
                echo $url;
            }

            if(!empty($erros)){
                foreach($erros as $erro){
                    echo '<li>' . $erro . '</li>' . '<br>';
                }
            }

            var_dump($_POST);
        } 

    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <h3>Formulário</h3><br>
            <label for="nome_id">
                Nome <input class="input_form" type="text" name="nome" id="nome_id" placeholder="seu nome aqui">
            </label><br>    
            <label for="idade_id">
                Idade <input class="input_form" type="text" name="idade" id="idade_id" placeholder="sua idade">
            </label><br>
            <label for="email_id">
                Email <input class="input_form" type="text" name="email" id="email_id" placeholder="seu email">
            </label><br>
            <label for="peso_id">
                Peso <input class="input_form" type="text" name="peso" id="peso_id" placeholder="seu peso">
            </label><br>
            <label for="url_id">
                Url <input class="input_form" type="text" name="url" id="url_id" placeholder="sua url">
            </label><br>

            <input class="btn_destaque" type="submit" name="env_form">
        </form>
    </main>
</body>
</html>