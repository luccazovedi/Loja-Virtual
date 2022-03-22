
<?php include_once("../account/conexao.php");
$id= $_GET['id'];
$result_produtos = "SELECT * FROM products WHERE id='$id'";
$resultado_produtos = mysqli_query($conexao, $result_produtos);
$row_produtos = mysqli_fetch_assoc($resultado_produtos);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Resultados</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1><?php echo $row_produtos['name']; ?></h1>
			</div>
			<div>

			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Conteúdo</a></li>
				<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Avaliação</a></li>
			
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="home">
					<?php echo $row_produtos['conteudo']; ?>
				</div>
				<div role="tabpanel" class="tab-pane" id="tutores">
					<?php echo $row_produtos['tutores']; ?>
					<?php
					// Seleciona todos os usuários
					include_once("conexao.php");
					$sql = "SELECT * FROM products ORDER BY id";
					while ($usuario = mysqli_fetch_object($sql, $conn)) {
						// Exibimos a foto
						echo "<img src='img/".$usuario->foto."' alt='Foto de exibição' /><br />";
					}
					?>
				</div>
			  </div>

			</div>
		</div>

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
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

        </div>
      </div>
	</div>
	<script>
      function calculo(){
        var cep = $("#cep").val();
        $.post('../frete/calcula.php',{cep:cep},function(data){
          $("#retorno").php(data);
        });
      }
	</script>
	<!--------------------------------------------------------------------------------------------------------------------
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
RODAPÉ 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
---------------------------------------------------------------------------------------------------------------------->
<style>
  .bd-placeholder-img {
	font-size: 1.125rem;
	text-anchor: middle;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
  }

  @media (min-width: 768px) {
	.bd-placeholder-img-lg {
	  font-size: 3.5rem;
	}
  }
</style>

<div class="social-links-warp">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<div class="footer-widget about-widget">
				<center>
					<h2 style="color: black;">SOBRE</h2>
					</center>					<p style="color: black;">Trabalho de Conclusão de Curso, desenvolvido por Lucca Zovedi, Pedro Zonca da Silva, Maycon Gius de Lima, Felipe Piccinin Creste e João Vitor Bolognini.</p>
					<img src="img/cards.png" alt="">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="footer-widget about-widget">
				<center>
					<h2 style="color: black;">OPÇÕES</h2>
					</center>					<ul>
						<li><a href="" style="color: black;">Sobre nós</a></li>
						<li><a href="contact.html" style="color: black;">Entre em contato</a></li>
						<li><a type="button" style='cursor: pointer;color:black'data-toggle="modal" data-target="#ExemploModalCentralizado">
							  Termos de Uso</a></li>
						<li><a href="./admin/usuario/index.php" style="color: black;">Administração</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="footer-widget contact-widget">
				<center>
					<h2 style="color: black;">INFORMAÇÕES</h2>
					</center>					
					<div class="con-info">
						<span>END.</span>
						<p style="color: black;">IFSP - CATANDUVA </p>
					</div>
					<div class="con-info">
						<span>FONE</span>
						<p style="color: black;">+55 (17) 99548-4925</p>
					</div>
					<div class="con-info">
						<span>EMAIL</span>
						<p style="color: black;">StomeStore@gmail.com</p>
					</div>
				</div>

			</div>

			<div class="col-lg-3 col-sm-6">
				<div class="footer-widget about-widget">
					<center>
					<h2 style="color: black;">REDES SOCIAIS</h2>
					</center>

					<div class="social-links">
						<a href="" class="instagram"><i class="fa fa-instagram"></i><span>INSTAGRAM</span></a><br><br>
						<a href="" class="facebook"><i class="fa fa-facebook"></i><span>FACEBOOK</span></a><br><br>
						<a href="" class="twitter"><i class="fa fa-twitter"></i><span>TWITTER</span></a><br>
					</div>
				</div>
			</div>
		</div>
	</div>
		<center>
		<div>
			<buttom><a href="#" id="subir">Volte ao Topo</a></buttom>
		</div>
		</center>
<style>
	#subir{
		border-color: black;
		cursor: pointer;
		border-radius: 50px;
		color: black; 
		padding: 12px 50px; 
		font-size: 18px"
	}
</style>
<script>
$(document).ready(function() {
	$('#subir').click(function(){
		$('html, body').animate({scrollTop:0}, 'slow');
		return false;
	});
});
</script>
			<p class="text-black text-center mt-5">Todos os Direitos reservados. | Storm Store 2020</p>
			

			<!-- Modal -->
			<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="TituloModalCentralizado">Termo de Uso e Responsabilidades</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" style='color:black'data-dismiss="modal">Fechar</button>
					</div>
					</div>
				</div>
			</div>
		</div>
</div>

	</body>
</html>