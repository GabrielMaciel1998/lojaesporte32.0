
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <form action = "principal.php?pagina=usuario/alteraruc&idusuario=<?php echo $idusuario ?>" method="POST">
            <input type="hidden" name="idusuario" value="<?php echo $idusuario ?>">
            Nome:<br>
            <input type="text" name="nome" value="<?php echo $nome ?>">
            <br>
            Sobrenome:<br>
            <input type="text" name="sobrenome" value="<?php echo $sobrenome ?>" >
            <br><br>
            email<br>
            <input type="text" name="email" value="<?php echo $email ?>" > 
            <br>
            telefone<br>
            <input type="text" name="telefone"value="<?php echo $telefone ?>" >
            <br><br>
            senha<br>
            <input type="text" name="senha" value="<?php echo $senha ?>" >
            <br>
            Data de Nascimento <br>
            
            <?php
            
       
            $data = explode("-", $nascimento);
            $ano =$data[0];
            $mes = $data[1];
            $dia = $data[2];
            ?>
            
            <select name="ano">
                <?php for ($i = 1994; $i < 2019; $i++) { ?>
                
                    <?php if($ano == $i) { ?>
                        <option selected><?php echo $i; ?></option>
                    <?php } else { ?>
                        <option><?php echo $i; ?></option>
                    <?php } ?>
                        
                <?php } ?>
            </select>
            <select name="mes">
                <?php for ($m = 1; $m < 12; $m++) : ?>
                    <?php if($mes == $m): ?>
                        <option selected><?php echo $m; ?></option>
                    <?php else :  ?>
                        <option><?php echo $m; ?></option>
                    <?php endif; ?>
                <?php endfor; ?>
            </select>
            <select name="dia">
                <?php for ($d = 0; $d < 31; $d++) : ?>
                        <?php if($dia== $d): ?>
                    <option selected><?php echo $d; ?></option>
                    <?php else: ?>
                    <option><?php echo $d; ?></option>
                    <?php endif; ?>
                <?php endfor; ?>
            </select>
             <br>
            <input type="radio" name="sexo" value="M">
            <label>Masculino</label>
            <input type="radio" name="sexo" value="F">
            <label>Feminino</label>
            <br>
            <input type="submit" value="editar" name="editar">
        </form> 

    </body>
</html>
