<form action="principal.php?pagina=cadastroProduto/correioteste" method="post">      
<div style="height:100px;"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Digite Seu CEP</label>
                        <input type="text" class="form-control" id="cep" placeholder="Seu cep" name="cep">
                        <small class="form-text text-muted"><a href="http://www.consultaenderecos.com.br/busca-endereco" target="_blank">Não sei meu CEP</a></small>
                    </div>
                    <button onclick="calculo();" class="btn btn-success">Calcular</button>
                </div>
                <div class="col-md-4" id="retorno">

                </div>
            </div>
        </div>
</form> 
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

        <!-- JavaScript-->
        <script>
                      function calculo() {
                          var cep = $("#cep").val();
                          $.post('correioteste.php', {cep: cep}, function (data) {
                              $("#retorno").html(data);
                          });
                      }
        </script>

  