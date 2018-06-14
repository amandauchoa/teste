<?php

	if(isset($_POST["nome"])){
		
	$usuario = "guilherme";
	$senha = "12345";
	
	$conexao = mysqli_connect("localhost", $usuario, $senha);
	
	if($conexao){
		//echo "Conectou no Banco de Dados<br />";
	}
	else{
		
		echo "Não conectou";
		echo "Numero:" . mysqli_connect_errno() . "<br />";
		echo "Descricao:" . mysqli_connect_error() . "<br />";
		exit;
	}
	
		$nome = $_POST["nome"];
		$sobrenome = $_POST["sobrenome"];
		$endereco = $_POST["endereco"];
		
		mysqli_select_db($conexao, "agenda_simples");
		
		$sql = "INSERT INTO Contatos (nome, sobrenome, endereco) VALUES ('$nome', '$sobrenome', '$endereco')";
		
		$query = mysqli_query($conexao, $sql);
		
		if(!$query){
			echo "Numero: " . mysqli_errno($conexao) . "<br />";
			echo "Descricao: " . mysqli_error($conexao) . "<br />";
		}
		
		mysqli_close($conexao);

		header("location:home.php");

	}
	else{
	
?>


<html>

	<body>
	
		<form action = "" method = "post">
		
			Nome:
			<input type = "text" name = "nome" />
			<br /><br />
			
			Sobrenome:
			<input type = "text" name = "sobrenome" />
			<br /><br />
			
			Endereco:
			<input type = "text" name = "endereco" />
			<br /><br />
			
			<input type = "submit" value = "Registrar" />
		
		</form>
	
	</body>

</html>

<?php
	}
?>