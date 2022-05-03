<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Upload</title>
</head>
<body>
    <?php

        if(isset($_POST['env_form'])){
            
            $extensoesPermitidas = ['jpg', 'png', 'jpeg', 'gif'];
            $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

            echo '<pre>';
                var_dump($_FILES);
            echo '</pre>';

            if(in_array($extensao, $extensoesPermitidas)){
                $pasta = 'arquivos\\';
                $temporario = $_FILES['arquivo']['tmp_name'];
                $novoNome = uniqid().'.'.$extensao;

                if(move_uploaded_file($temporario, $pasta.'.'.$novoNome)){
                    echo 'upload feito com sucesso.';
                } else {
                    echo 'erro no upload.';
                }
            }else{
                echo 'extensão não permitida';
            }

        }

    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo">

        <input type="submit" name="env_form">

    </form>
</body>
</html>