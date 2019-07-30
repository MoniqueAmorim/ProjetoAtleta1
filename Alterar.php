<head>
		<title>Atletas - Alteração</title>
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
	<nav>
    <ul>	
        <li><a href="cadAtletas.html"><div class="link">Cadastro Atletas</div></a></li>
        <li><a href="submenu.html"><div class="link">Menu</div></a><li>
        <li><a href="Suporte.html"><div class="link">Suporte</div></a><li>  
	    <li><a href="index.html"><div class="link">Menu Principal</div></a></li>		
    </ul>
</nav>
		<h2>Cadastro de Atletas</h2>
		
		<?php
		if ( ! isset($_GET["c"]) )
			  die("Rotina chamada de forma incorreta!");
		  
			$codigo = $_GET["c"];
			
			$comandoSQL="SELECT * FROM atletas WHERE codigo=$codigo";
			
			include "conexao.php";
			
			$registro = mysqli_query( $conexao , $comandoSQL ) or 
			 die("Erro na recuperção dos dados 
			   do recibo: " . mysqli_error($conexao));
			   
			$linhas = mysqli_num_rows($registro);
			
			if($linhas<1)
				die("Recibo Código $codigo não encontrado. Excluido?");
			
			$dados = mysqli_fetch_array($registro);
		
				
                 
				$nome           =$dados['nome'];
                $pesoAtleta     =$dados['pesoAtleta'];
                $nrAltura       =$dados['nrAltura'];
				$situacaodoAtleta=$dados['situacaodoAtleta'];
                $calculodaIMC   =$calculodaIMC['bairro'];
               
?> 
        
        <fieldset>
        <div class="link"><legend> Alterar dados Clientes</div> </h2></legend>
        <form 	action="gravarCliente.php" 
				enctype="multipart/form-data"
				method="post">
				
			<input 	type="hidden" 
					name="codigo"
					value="<?php echo $codigo; ?>">
             
      <b><div class="link">Nome:</b><input type="text" name="nome"
			  id="nome" size="45" maxlength="45"
			  placeholder="" value="<?php echo $nome;?>">
            
       	  

		
		        Peso:<input type="text" name="pesoAtleta"
					id="pesoAtleta" size="11" maxlength="11"
                    placeholder="Digite:"
					value="<?php echo $pesoAtleta;?>"><br><br>			   
		
                Altura:<input type="text" name="nrAltura" id="nrAltura" size="45"
                  maxlength="45" placeholder="Av,Rua,Trav" value="<?php echo $nrAltura;?>"><br><br>
				  

				Modalidade <select name="modalidade">
				 <option value="">Selecione</option>
                 <option value= <?php if($estado=="AT") echo "selected";?>>Atletismo</option>
                 <option value= <?php if($estado=="BA") echo "selected";?>>Badminton</option>
                 <option value= <?php if($estado=="BS") echo "selected";?>>Basquete</option>
                 <option value= <?php if($estado=="BE") echo "selected";?>>Beisebol</option>
           	     <option value= <?php if($estado=="BO") echo "selected";?>>Boxe</option>
                 <option value= <?php if($estado=="CA") echo "selected";?>>Canoagem</option>
                 <option value= <?php if($estado=="CI") echo "selected";?>>Ciclismo</option>
                 <option value= <?php if($estado=="ES") echo "selected";?>>Esgrima</option>
                 <option value= <?php if($estado=="FU") echo "selected";?>>Futebol</option>
                 <option value= <?php if($estado=="GI") echo "selected";?>>Ginástica</option>
                 <option value= <?php if($estado=="HA") echo "selected";?>>Halterofilismo</option>
                 <option value= <?php if($estado=="HD") echo "selected";?>>Handebol</option>
                 <option value= <?php if($estado=="HI") echo "selected";?>>Hipismo</option>
                 <option value= <?php if($estado=="HO") echo "selected";?>>Hóquei</option>
                 <option value= <?php if($estado=="JU") echo "selected";?>>Judô</option>
                 <option value= <?php if($estado=="NA") echo "selected";?>>Natação</option>
                 <option value= <?php if($estado=="PO") echo "selected";?>>Pólo Aquático</option>
                 <option value= <?php if($estado=="TE") echo "selected";?>>Tênis</option>
                 <option value= <?php if($estado=="VO") echo "selected";?>>Vôlei</option>
                 </select> <br><br>
        				
				<br><br>
				
				<fieldset>
		        <div class="link">Situacao de Atleta: <input type="radio" name="situacaodoAtleta" id="situacaodoAtleta"
		        value="C" checked <?php if($situacaodoAtleta==1) echo "checked";?>>Competindo 
		        <input type="radio" name="situacaodoAtleta" id="situacaodoAtleta"
				value="T" <?php if($situacaodoAtleta==1) echo "checked";?> >Treinando<br><br>
                <input type="radio" name="situacaodoAtleta" id="situacaodoAtleta"
				value="P" <?php if($situacaodoAtleta==1) echo "checked";?> >Período de Provas<br><br>    
                    
				
			
		       <label for="obs">Observações:<label><br>					
					<textarea name="calculodaIMC" id="calculodaIMC" rows="5" cols="80" ><?php echo $calculodaIMC; ?></textarea><br><br>

			<br>
			
			?>
				
			<br><br>	
				
				
				
				<input type="submit" value="Enviar">
      			<input type="Reset" value="Limpar Campos Digitados">
				<input type="button" name= "imprimir" value="Imprimir" onclick="print()"/></div>
				
				
				
			
	    </form>
    </body>
</html>	 