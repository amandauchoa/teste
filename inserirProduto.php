<?php


	if(isset($_POST["nome"])){
		$usuario = "root";
		$senha = "usbw";
		$conexao = mysqli_connect("localhost", $usuario, $senha);
		
		if($conexao){
			//echo "Conectou";
		}else{
			echo "Não Conectou";
			echo "Numero:" . mysqli_connect_errno() . "<br />";
			echo "Descrição:" . mysqli_connect_error() . "<br />";
			exit;
		}
		
		$nome = $_POST["nome"];
		$preco = $_POST["preco"];
		$quantidade = $_POST["quantidade"];
		
		mysqli_select_db($conexao, "lista");
		
		$sql = "INSERT INTO produto (nome, preco, quantidade) VALUES ('$nome', '$preco', '$quantidade')";
		$query = mysqli_query($conexao, $sql);
		
		if(!$query){
			echo "Numero:" . mysqli_errno($conexao) . "<br />";
			echo "Descrição:" . mysqli_error($conexao) . "<br />";
		}
		
		mysqli_close($conexao);
		
		header("location:homeP.php");
	}
	else{

?>

<html>
	<head>
		<title>Lista Produtos</title>
	</head>
	
	<body>
		<form action = "" method = "post">
		
		<label>Nome:</label>
		<input type = "text" name = "nome" /><br /><br />
		<label>Preço</label>
		<input type = "number" name = "preco" /><br /><br />
		<label>Quantidade</label>
		<input type = "number" name = "quantidade" /><br /><br />
		<br /><br />
		<input type = "submit" value = "Finalizar" />
		</form>		
		
	</body>

</html>

<?php
	}
?>