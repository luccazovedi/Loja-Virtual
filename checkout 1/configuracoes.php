<?php
//Ocultando os erros de PHP, para exibí-los troque Zero por Hum.
ini_set('display_errors',0);
date_default_timezone_set("America/Sao_Paulo");

setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );

$pagseguro_email = "seu@email.com";
//Token gerado pelo Pagseguro (PARA USAR EM MODO PRODUÇÃO GERE UM TOKEN NO PAINEL PAGSEGURO).
$pagseguro_token = "00000000000000000000000000000000";
//Para usar o checkout em modo produção deixe essa variável em branco, para usar em modo teste mantenha o valor ".sandbox".

$sandbox = ".sandbox";

$pagseguro_url = "https://ws".$sandbox.".pagseguro.uol.com.br/v2/transactions";

$pagseguro_url_js = "https://stc".$sandbox.".pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";

$pagseguro_retorno = "https://seusite.com.br/pagseguro/retorno.php";
?>
