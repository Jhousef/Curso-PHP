<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivo</title>
</head>
<body>
    <?php
        //
        if(isset($_POST['enviar_form'])){
            $extensoesPermitidas = ['png', 'jpeg', 'jpg', 'gif'];
            $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

            if(in_array($extensao, $extensoesPermitidas)){
                $pasta = 'C:\xampp\htdocs\cursophp\23-upload\arquivos\.';
                $temporario = $_FILES['arquivo']['tmp_name'];
                $novoNome = uniqid().".$extensao";

                #var_dump($temporario);
                if(move_uploaded_file($temporario, $pasta.$novoNome)){
                    $mensagem = 'upload feito com sucesso!';
                } else {
                    $mensagem = 'erro no upload.';
                }

            } else {
                $mensagem = 'Formato não permitido';
            }

            echo $mensagem;


        } 


        /*
        // um jeito de visualizar a super global $_FILES.
        echo '<pre>';
            var_dump($_FILES);
        echo '</pre>';
        */
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data"> 
        <input type="file" name="arquivo"> 
        <input type="submit" name="enviar_form">
    </form>
</body>
</html>