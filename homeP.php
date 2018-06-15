<?php

	include("cabecalho");
	
	$usuario = "Amanda";
	$senha = "Amanda";
	$conexao = mysqli_connect ("localhost", $usuario, $senha);
	
	if ($conexao){
		//echo "Conectou";
	}else{
		echo "Não conectou:";
		echo "Numero:" . mysqli_connect_errno(). "<br />";
		echo "Descrição:" . mysqli_connect_error(). "<br />";
	}
	
	mysqli_select_db($conexao, "Mercado");
	
	$sql = "SELECT * FROM produtos";
	
	$resultado = mysqli_query($conexao, $sql);
	
	echo "<html>";
	echo "<table border = '1'>";
	echo "<tr>";
	echo "<th>Id do produto:</th>";
	echo "<th>Nome do produto:</td>";
	echo "<th>Preço</th>";
	echo "<th>Quantidade</th>";
	echo "<th>Unidade</th>";
	echo "</tr>";
	
	while (($vetor = mysqli_fetch_array($resultado)) != NULL){
		echo "<tr>";
		echo "<td>" .$vetor["1"]. "</td>";
		echo "<td>" .$vetor["2"]. "</td>";
		echo "<td>" .$vetor["3"]. "</td>";
		echo "<td>" .$vetor["4"]. "</td>";
		echo "<td>" .$vetor["5"]. "</td>";
		echo "</tr>";
	}
	
	echo "</table>";
	echo "</html>";
	
	mysql_close($conexao);
	

?>