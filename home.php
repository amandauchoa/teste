<?php

	include("cabecalho.php");

	$usuario = "guilherme";
	$senha = "12345";
	
	//Conecta com o banco de dados
	$conexao = mysqli_connect("localhost", $usuario, $senha);
	//<url> - endereco para chegar ate o BD
	
	if($conexao){
		//echo "Conectou no Banco de Dados<br />";
	}
	else{
		echo "Não conectou";
		echo "Numero:" . mysqli_connect_errno() . "<br />";
		echo "Descricao:" . mysqli_connect_error() . "<br />";
		exit;
	}
		
		
		mysqli_select_db($conexao, "agenda_simples");
		
		$sql = "SELECT * FROM contatos";
		
		$resultado = mysqli_query($conexao, $sql);
		
		echo "<html>";
		echo "<table border = '1'>";
		echo "<tr>";
		echo "<th>Id</th>";
		echo "<th>Nome</th>";
		echo "<th>Sobrenome</th>";
		echo "<th>Endereco</th>";
		echo "</tr>";
		//echo "<tr>";
		while (($vetor = mysqli_fetch_array($resultado)) != NULL){
				echo "<tr>";
				echo "<td>" . $vetor["0"] . "</td>";
				echo "<td>" . $vetor["1"] . "</td>";
				echo "<td>" . $vetor["2"] . "</td>";
				echo "<td>" . $vetor["3"] . "</td>";
				echo "</tr>";
		}
		//echo "</tr>";
		echo "</table>";
		echo "</html>";
		
		mysqli_close($conexao);
	
	
?>