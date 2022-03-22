
<?php include_once("conexao.php");
$result_produtos = "SELECT * FROM products FROM id";
$resultado_produtos = mysqli_query($conexao, $result_produtos);
$produtos = mysqli_fetch_assoc($resultado_produtos);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Storm Store | Resultados</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>		


<div class="container">
  <?php echo $produtos['name']; ?>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Conteúdo</h3>
		<p><?php echo $row_produtos['conteudo']; ?></p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Frete</h3>
	  <div style="height:100px;"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Digite Seu CEP</label>
                <input type="text" class="form-control" id="cep" placeholder="Seu cep">
                <small class="form-text text-muted"><a href="http://www.consultaenderecos.com.br/busca-endereco" target="_blank">Não sei meu CEP</a></small>
              </div>
              <button onclick="calculo();" class="btn btn-success">Calcular</button>
        </div>
        <div class="col-md-4" id="retorno">

        </div>
      </div>
    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <!-- JavaScript-->
    <script>
      function calculo(){
        var cep = $("#cep").val();
        $.post('../frete/calcula.php',{cep:cep},function(data){
          $("#retorno").html(data);
        });
      }
    </script>

    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
	  <?php echo $row_produtos['price']; ?>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
	  <?php echo $row_produtos['price']; ?>
    </div>
  </div>
</div>