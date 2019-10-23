
        <div id="card">
            <p>Faça seu cadastro para realizar sua compra</p>
            <form action="usuariocomum.php" method="POST">
                Nome:<br>
                <input type="text" name="nome" placeholder="Nome">
                <br>
                Sobrenome:<br>
                <input type="text" name="sobrenome" placeholder="Sobrenome">
                <br><br>
                email<br>
                <input type="text" name="email" placeholder="Email">
                <br>
                senha<br>
                <input type="password" name="senha" placeholder="Senha">
                <br><br>
                telefone<br>
                <input type="text" name="telefone" placeholder="Telefone"> 
                <br>
                Data de Nascimento <br>
                <select name="ano">
                    <?php for ($i = 1994; $i < 2019; $i++) { ?>
                        <option><?php echo $i; ?></option>
                    <?php } ?>
                </select>
                <select name="mes">
                    <?php for ($m = 1; $m < 12; $m++) { ?>
                        <option><?php echo $m; ?></option>
                    <?php } ?>
                </select>
                <select name="dia">
                    <?php for ($d = 0; $d < 31; $d++) { ?>
                        <option><?php echo $d; ?></option>
                    <?php } ?>
                </select>
                <br>
                <input type="radio" name="sexo" value="M">
                <label>Masculino</label>
                <input type="radio" name="sexo" value="F">
                <label>Feminino</label>
                <br>
                <input type="submit" value="Submit">
            </form> 
        </div>
       

    </body>
</html>

