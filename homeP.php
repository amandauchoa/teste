<?php
	include("cabecalho2.php");
	
	$usuario = "root";
	$senha = "usbw";
	$conexao = mysqli_connect ("localhost", $usuario, $senha);
	
	if ($conexao){
		//echo "Conectou";
	}else{
		echo "Não conectou:";
		echo "Numero:" . mysqli_connect_errno(). "<br />";
		echo "Descrição:" . mysqli_connect_error(). "<br />";
		exit;
	}
	
	mysqli_select_db($conexao, "lista");
	
	$sql = "SELECT * FROM produto";
	
	$resultado = mysqli_query($conexao, $sql);
	
	echo "<html>";
	echo "<table border = '1'>";
	echo "<tr>";
	echo "<th>Id:</th>";
	echo "<th>Nome:</td>";
	echo "<th>Preço</th>";
	echo "<th>Quantidade</th>";
	echo "</tr>";
	
	while (($vetor = mysqli_fetch_array($resultado)) != NULL){
		echo "<tr>";
		echo "<td>" .$vetor["0"]. "</td>";
		echo "<td>" .$vetor["1"]. "</td>";
		echo "<td>" .$vetor["2"]. "</td>";
		echo "<td>" .$vetor["3"]. "</td>";
		echo "</tr>";
	}
	
	echo "</table>";
	echo "</html>";
	
	mysqli_close($conexao);
	

?>