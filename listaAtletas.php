<html>
	<head>
		<title>Listagem de Clientes</title>
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
	<body background="http://abrapark.com.br/site/wp-content/uploads/2016/05/estacionamento-fundo-obrigado.jpg">
	<nav>
    <ul>	
        <li><a href="cadPfisica.html" class="link">Cadastrar Novo Cliente Pessoa Fisica</a></li>
		 <li><a href="cadPjuridica.html" class="link">Cadastrar Novo Cliente Pessoa Juridica</a></li>
        <li><a href="listaClientes.php"class="link">Lista de Clientes</a></li>
        <li><a href="submenu.html"class="link">Menu Cliente</a></li>
        <li><a href="index.html"class="link">HOME</a></li>
    </ul>
	<br>
</nav>
	</head>
	<body>
	<?php 
		$conn=mysqli_connect("localhost",
					"root",
					"") or
		die("Erro na conexão com o MYSQL.") ;

	mysqli_select_db($conn , "estacionamento") or
		die("Falha na seleção do banco de dados:" .
			mysqli_error($conn) );
			
	$comando="SELECT * FROM clientes ORDER BY codigo" ;
	
	$rs = mysqli_query($conn , $comando) or
		die("Falha na seleção de dados:" .
			mysqli_error($conn) );
	
	$linhas = mysqli_num_rows($rs) or
		die("Falha na recuperação dos registros:" . mysqli_error($conn) );
			
	echo "<div class='link'>Número de registros encontrados: $linhas <br>";
	
	echo "<table border='2' class='link'>";
	echo "	<tr>";
    echo "		<th>codigo</th>";
	echo "		<th>Nome</th>";
	echo "		<th>Peso</th>";
	echo "		<th>Altura</th>";
	echo "		<th>Modalidade</th>";
	echo "		<th>Situação do Alteta</th>";
	echo "		<th>Calculo da IMC</th>";
	echo "		<th colspan='2'>Ações</th>";
    echo "	</tr";
	while( $dados = mysqli_fetch_array($rs) )
	{
		
        $nome           = $dados["nome"];
	    $pesoAtleta     = $dados["pesoAtleta"];
	    $nrAltura       = $dados["nrAltura"];
	    $modalidade     = $dados["modalidade"];
	    $situacaodoAtleta = $dados["situacaodoAtleta"];
	    $calculodaIMC   = $dados["calculodaIMC"];
	  
		echo "	<tr>";
		echo "		<td align='center' color='#ffffff'> $codigo</td>" ;
		echo "		<td align='center'> $nome         </td>" ;
		echo "		<td align='center'> $pesoAtleta     </td>" ;
		echo "		<td align='center'> $nrAltura      </td>" ;
		echo "		<td align='center'> $modalidade   </td>" ;
		echo "		<td align='center'> $situacaodoAtleta  </td>" ;
		echo "		<td align='center'> $calculodaIMC       </td>" ;
		echo "		<td> <a href='Alterar.php?c=$codigo'>Alterar</a> </td>";
	    echo "		<td><a href='excluirAtletas.php?c=$codigo'>Excluir Dados</a> 
						</td>"	;
			echo "	</tr></div>";
		
		}
		echo "</table>";
		?>
	</body>
</html>