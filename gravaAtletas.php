<html>
	<head>
		<title>Dados de  Cadastrado do Cliente</title>
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
	   </style>

	  <body><img background src = "Imagens/imagem.jpg"   align="right">
	<nav>
    <ul>	
       <li><a href="cadAtletas.html"><div class="link">Cadastro Atletas</div></a></li>
        <li><a href="submenu.html"><div class="link">Menu</div></a><li>
        <li><a href="Suporte.html"><div class="link">Suporte</div></a><li>  
	   <li><a href="index.html"><div class="link">Menu Principal</div></a></li>		
    </ul>
	<br>
</nav>
	
</head><body>
<?php
	
	
    	        $nome           =$POST['nome'];
                $pesoAtleta     =$POST['pesoAtleta'];
                $nrAltura       =$POST['nrAltura'];
                $modalidade     =$POST['modalidade'];
				$situacaodoAtleta=$POST['situacaodoAtleta'];
                $calculodaIMC   =$POST['bairro'];
	
	if ( strlen($nome) <2 )
		die("<div class='link'>Informe nome com minimo  2 caracteres.</div>");
	
	if ($pesoAtleta =="")
		die("<div class='link'></div>");
	
	if ($nrAltura=="" )
		die("<div class='link'>tipo de cliente deve ser informado !!.</div>");
    
    if ($modalidade=="" )
		die("<div class='link'>tipo de cliente deve ser informado !!.</div>");    
	
	if ($situacaodoAtleta=="" )
		die("<div class='link'>Tipo do carro informado !!.</div>");
	
	if ($calculodaIMC =="")
		die("<div class='link'>A placa deve ser informada !!</div>");
	
	
	echo "<div class='link'><h2>Dados Recebidos<div></h2>";
	echo "<table border='1' class='link'>";
	echo " 				<tr'>";        
	echo "<th>Nome:                   </th>";      
	echo "<th>Peso:                   </th>";      
	echo "<th>Altura:                 </th>";      
	echo "<th>Modalidade:             </th>";      
	echo "<th>Situação do Alteta      </th>";      
	echo "<th>Calculo da IMC          </th>";      
    echo "</tr></div>";
	
	
	
	echo"<tr>";
	echo"<td align='center'>$nome            <br> </td>";
	echo"<td align='center'>$pesoAtleta      <br> </td>";
	echo"<td align='center'>$nrAltura        <br> </td>";
	echo"<td align='center'>$modalidade      <br> </td>";
	echo"<td align='center'>$situacaodoAtleta<br> </td>";
	echo"<td align='center'>$calculodaIMC    <br> </td>";
    echo"</tr>";
	echo"</table></div>";
	
    echo "<hr>";
	$url = "localhost";
	$user="root";
	$password="";
	$database="estacionamento";
	
	echo "1 - Conectando no MYSQL...<br>";
	$con = mysqli_connect( $url , $user , $password ) ;
	echo "MySQL conectado<br>";
    echo "<hr>";	
	
	echo "2 - Selecionando o banco de dados <b>estacionamento</b> <br>";
	mysqli_select_db($con , $database) or 
		die("Erro na seleção do banco : " . mysqli_error($con));
	echo "Banco <b></b> aberto.<br>";
	echo "<hr>";
	
	$comandoSQL =  "INSERT INTO clientes (nome,   cpfcnpj,   tipocad,      lougradoro,   nresidencia,   bairro,   cidade,   cep,   estado,    ddd,   celular,   telefone,   email,   tipodecliente,   modelodocarro,  placa,    obs,   nomeArqFoto)
    VALUES('$nome','$pesoAtleta','$nrAltura','$modalidade','$situacaodoAtleta','$calculodaIMC')";

    echo "<hr>";	
	echo "3 - Gravando os dados no banco...<br>";
	mysqli_query($con , $comandoSQL) or 
		die("Erro na inseeção do registro de novo 
			cliente" . mysqli_error($con));
echo "<hr>";			
	echo "Cliente <b>$nome </b> Documento: $cpfcnpj inserido com sucesso!<br>";
?>





<input type="button" name="imprimir" value="Imprimir" onclick="window.print();">


</body>
</html>