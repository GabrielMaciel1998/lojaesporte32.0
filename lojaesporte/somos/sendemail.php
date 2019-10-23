<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>enviando</title>
    </head>
    <body>
        <?php
        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $assunto=$_POST['assunto'];
        $mensagem=$_POST['mensagem'];
        $to="macielgabriel275@gmail.com";
        $subject="$assunto";
        $message="nome= $nome Email=$email assunto=$assunto mensagem $mensagem";
        $resultadoemail= mail($to, $subject, $message);
        if($resultadoemail == TRUE){
            echo "mensagem enviado com sucesso";
        }else{
            echo "Mensagem não enviada com sucesso";
        }
        
        ?>
    </body>
</html>
