<?php

	$usuario = "guilherme";
		$senha = "12345";
		
	$conexao = mysqli_connect("localhost", $usuario, $senha);
	mysqli_select_db($conexao, "agenda_simples");
	$sql = "SELECT * FROM contatos";
	$query = mysqli_query($conexao, $sql);
	$linhas = mysqli_num_rows($query);
	
	if(isset($_POST["nome"])){
		$nome = $_POST["nome"];
		$sobrenome = $_POST["sobrenome"];
		$endereco = $_POST["endereco"];
		$id = $_POST["id"];
	
		$sql2 = "UPDATE contatos SET nome = '$nome', sobrenome = '$sobrenome', endereco = '$endereco' where id = '$id' ";
		$query = mysqli_query($conexao, $sql2);
	
		mysqli_close($conexao);
		header("location:home.php");
	}
?>
<html>

	<body>
	
		<form action = "" method = "post">
		
			Qual usuario deseja atualizar:
			<select name = "id">
			
				<?php
					for($i=0; $i<$linhas; $i++){
					$vetor = mysqli_fetch_array($query);
				?>
				<option  name = "id" value = "<?=$vetor[0];?>">
						<?php echo "$vetor[1]";?>
				</option>
				<?php
					}
				?>
			
			</select>
			<br /><br />
		
			Nome:
			<input type = "text" name = "nome" />
			<br /><br />
			
			Sobrenome:
			<input type = "text" name = "sobrenome" />
			<br /><br />
			
			Endereco:
			<input type = "text" name = "endereco" />
			<br /><br />
			
			<input type = "submit" value = "Atualizar" />
		
		</form>
	
	</body>

</html>
