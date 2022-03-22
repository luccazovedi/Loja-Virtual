<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Storm Store | Loja Virtual</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Storm Store | Loja Virtual">
	<meta name="keywords" content="storm store, loja virtual, ecommerce, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>
	<script src="//code.jivosite.com/widget/9ztndZFq3r" async></script>
	<!-- Google Fontes -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/flaticon.css"/>
	<link rel="stylesheet" href="../css/slicknav.min.css"/>
	<link rel="stylesheet" href="../css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="../css/animate.css"/>
	<link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../css/carousel.css"/>

</head>
<body>
<!--------------------------------------------------------------------------------------------------------------------
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
HEADER 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
---------------------------------------------------------------------------------------------------------------------->
<header class="header-section">
	<div class="header-top">
			<div class="container">
				<div >
						
					<!------------------- 
					LOGO 
					-------------------->					
					<center>
						<a href="../index.php" class="site-logo">
							<img src="../img/logo.jpeg" alt="">
						</a>
					<center>
					
						<script>
							var adicionar = true;
							var opt = document.createElement('option');

							for(i=0, i<lista.options.length; i++;){
								if(texto==lista.options[i].value){
									adicionar=false;
								}
							}
							if(adicionar==true){
								opt.value=texto;
								lista.appendChild(opt);
							}
						</script>
					<br>
					<!------------------- 
					LOGIN E CADASTRO 
					-------------------->
				</div>
			</div>
	</div>

	<hr>
	<br>
</header>
	<center><h3>Área de Cadastro</h3></center><br><br>

	<section class="contact-section">  
		<div class="container">   
			
		<form name='form2' class="contact-form" method="POST" action="validar.php" onSubmit="return enviardados();">
		
		<div>
			<div class="alert alert-danger">
				<strong>Atenção!</strong> Parece que você ainda não é cadastrado em nosso site.
			</div>
			<h5>Preencha corretamente para criar sua conta. Ao ser confirmado seu cadastro você será redirecionado para fazer o Login!</h5>
			<hr>	 
			<br>
			<label><b>Email</b></label>
			<input class="email" type="email" placeholder="Digite seu e-mail" name="usuario" required id="email">
			
			<label><b>Nome completo</b></label>
			<input class="name" type="text" placeholder="Digite seu nome" name="nome" required>
			
			<label><b>Senha</b></label>
			<input class="password" type="password" placeholder="Digite sua senha" id='senha'name="senha" required>
			<a style="border-radius: 10px; cursor: pointer;background-color:white;color: black; font-size: 15px; position:relative"type="button" onclick="mostrarSenha()">Mostrar Senha</a>
			<br><br>
			<p>Ao enviar, você estará de acotdo com nossos:<a href="#" style="color:dodgerblue">Termos e Políticas</a>.</p>

			<div class="clearfix">
				<button type="submit" onclick="return validar()"class="enviarbtn" style=" border-radius:10px;background-color:#3CB371;color: white;padding: 14px 20px;  margin: 8px 0;border: none;cursor: pointer;width: 100%;">
				Enviar</button>
			</div>
			<a href="./login.php" class='btn default'style=" background-color:gray;color: white;padding: 14px 20px;  margin: 8px 0;border: none;cursor: pointer;width: 100%;">
				Caso já tenha uma conta, clique aqui para fazer o login</a>
			</div>
		</form>
		</div>
		<script>
			function mostrarSenha(){
				var tipo = document.getElementById("senha");
				if(tipo.type == "password"){
					tipo.type = "text";
				}else{
					tipo.type = "password";
				}
			}
		</script>
		
<script language="JavaScript" >
function validar() {
    
    var nome = formulario.nome.value;
 
      if (nome == "") {
        alert('Preencha o campo com seu nome');
          formulario.nome.focus();
          return false;
       }
    }
</script>
	</section>
	<br><br>

	<!--====== Javascripts e Jquery ======-->
	<script src="../js/database/requiredb.js"></script>
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/jquery.nicescroll.min.js"></script>
	<script src="../js/jquery-ui.min.js"></script>
	<script src="../js/main.js"></script>
	<script src="../js/register.js"></script>
	
	</body>
</html>
