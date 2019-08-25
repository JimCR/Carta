<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<title>Carta de Recomendação</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<link rel="stylesheet" type="text/css" href="_css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="_css/bootstrap.min.css">
	<link rel = "shortcut icon" type = "imagem/x-icon" href = "_img/logo1.png"/>
</head>
<body>
	<header class="cabecalho">
		<h3>Igreja Evangélica Assembléia de Deus</br> Ministério do Belém</h3>
		<p></br>Rua Cuiaba nº 1390 - Dourados/MS - 79802-030</br>Fone: (67) 3421-0392 / 3421-0256 Caixa Postal 58</br></p>
		</br><h4>CARTA DE APRESENTAÇÃO</h4>
	</header>
	<form>
		<div class="destino">
		<br><input type="radio" name=CHG_CHK value="VISIT" 
					<?php if ($_POST["CHG_CHK"] == "VISIT") {
						# code...
						echo "checked";
					}?>>Visita
					   	  <input type="radio" name=CHG_CHK value="CHG"
					 <?php if ($_POST["CHG_CHK"] == "CHG") {
					   	  	# code...
					   	  	echo "checked";
					 }?>>Mudança
		</div>
		<div class="cidade">
			<p>Recomendamos a Igreja Evangélica Assembléia de Deus em</p> <input type="text" name="igreja" placeholder="Cidade de Destino!">
		</div>
		<div class="bro">
			<p>o irmão(a)</p> <input type="text" name="membro" placeholder="Nome do Membro!">
		</div>
		<div class="mbm">
		<br><input type="radio" name=CNG_CHK value="MEB" 
					<?php if ($_POST["CNG_CHK"] == "MEB") {
						# code...
						echo "checked";
					}?>>Membro desta igreja
		</div>
		<div class="mbm2">
				<input type="radio" name=CNG_CHK value="CNG"
				 <?php if ($_POST["CNG_CHK"] == "CNG") {
				   	  	# code...
				   	  	echo "checked";
				 }?>>Congragado(a) nesta igreja
		</div>
		<div class="cargo">
			<br>Cargo:		<select name="cargo">
							<option selected="">Selecione</option>
							<option>Pastor</option>
							<option>Evangelista</option>
							<option>Presibitero</option>
							<option>Diacono</option>
							<option>Cooperador</option>
							<option>Membro</option>
		</select>
		</div>
		<div class="estadocivil">

			</br>Estado Civil:	<select name="estadocivil">
								<option selected="">Selecione</option>
								<option>Casado</option>
								<option>Solteiro</option>
								</select>
		</div>
		<div class="setor">
			</br> Setor: <select name="setor">
						<option selected="">Selecione
							<?php
				 	for ($i=1; $i<=31; $i++)
				      {?>
				     <option value="<?php echo $i;?>"> <?php echo $i;}
				?>
				<?php if($_POST["SET"] == "Setor")
					{echo "Setor";} ?>
						</option>
						</select>
		</div>
		<div class="congregacao">
			<br> Congregação: <select>
							  <option>Selecione</option>
							  <option>Sede</option>
							  </select>
		</div>
		<div class="saudation">
			<p>Certo de vosso amor cristão, pedimos que o(a) recebais fraternalmente </br>no Senhor Jesus. No ensejo externamos nosso sincero apreço por essa </br>amada igreja.</p>
		</div>
		<div class="observacao">Observação:
			<textarea class="form-control" name="observacao"></textarea>
		</div>
		<div class="data">
			</br>Dourados,MS - <select selected>Dia
				<option selected="Dia">Dia
				<?php
				 	for ($i=1; $i<=31; $i++)
				      {?>
				     <option value="<?php echo $i;?>"> <?php echo $i;}
				?>
				<?php if($_POST["DAY"] == "Dia")
					{echo "Dia";} ?>
			</option>
			</select>
			de <select selected="">Mês
				<option selected="">Mês</option>
				<option>Janeiro</option>
				<option>Fevereiro</option>
				<option>Março</option>
				<option>Abril</option>
				<option>Maio</option>
				<option>Junho</option>
				<option>Julho</option>
				<option>Agosto</option>
				<option>Setembro</option>
				<option>Outubro</option>
				<option>Novembro</option>
				<option>Dezembro</option>
			   </select>
			de <select selected="">Ano
				<option selected="">Ano
					<?php
			      for ($i=1950; $i<=2019; $i++){?>
				    <option value="<?php echo $i;?>">
				     <?php echo $i;}?>

				     <?php 
				     	if ($_POST["YEAR"] == "Ano") {
				     		# code...
				     		echo "selected";
				     	}
				     ?>
				</option>
			</select>
		</div>
	</form>
	<div class="line">
		________________________________________
					 <p>Assinatura</p>
	</div>
	<div class="botao" name="btn">
		</br><input type="reset" name="limpar">
	</div>
	<div class="sbm">
		<input type="submit" value="Imprimir" name="Imprimir">
	</div>
</body>
</html>
