<html>
	<head>
		<title>Exclusão de Atletas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
	.link{
	   padding:20px;
	   font-family:"Arial';
	   font-size:12pt;
	   transition:all .2%s linear;
	   color:#f4f4f9;
	   border-bottom:2px solid #f4f4f9;
	   }
	   li{ 
	   display: inline; 
	   color:#f4f4f9;
	   background-color:#494950;
	   }
	   .fundo{
		   background-color:#f4f4f9;
	   }
	   </style>
   </head>
<body><img background src = "Imagens/imagem.jpg"   align="right">
<?php

$conexao=mysqli_connect("localhost", "root", "") ;

mysqli_select_db($conexao, "atletas") or
die("Falha na seleção do banco de dados:" . mysqli_error($conexao) ) ;

if (!isset($_GET["c"]))
die("Página chamada de forma incorreta. Use a página de listagem para
selecionar o registro a ser excluído. Sistema Interrompido.") ;

if ( (int) $_GET["c"] <1)
die("Código de Registro a ser excluído inválido. Sistema Interrompido.") ;

$comandoSQL = 'DELETE FROM atletas WHERE codigo=' . $_GET["c"];

mysqli_query($conexao, $comandoSQL) or die("Erro na tentativa de eliminação do
registro código $c:" . mysqli_error() ) ;

echo "<div class='link'>Registro eliminado do cadastro com sucesso<div> <hr>";
?>
<input type="button" name="imprimir" value="Imprimir" onclick="window.print();">
<input type="button" value="Menu"  href="#" onClick="window.open('index.html','pagename'); return false;"><noscript> <a href="index.html" target="_blank"></a></noscript>
<input type="button" value="Cadastro de Atletas"  href="#" onClick="window.open('cadAtletas.html','pagename'); return false;"><noscript> <a href="cadAtletas.html" target="_blank"></a></noscript>
<input type="button" value="Listar Atletas"  href="#" onClick="window.open('listaAtletas.php','pagename'); return false;"><noscript> <a href="Atletas.php" target="_blank"></a></noscript>
</body>

</html>
