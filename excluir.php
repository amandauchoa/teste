<?php

	$usuario = "guilherme";
	$senha = "12345";
	
	$conexao = mysqli_connect("localhost", $usuario, $senha);
	mysqli_select_db($conexao, "agenda_simples");
	
	$sql = "SELECT * FROM contatos";
	
	$query = mysqli_query($conexao, $sql);
	
	$linhas = mysqli_num_rows($query);
	
	if(isset($_POST["id"])){
	$id = $_POST["id"];
	
		$sql2 = "DELETE FROM CONTATOS where id = '$id'";
		$query = mysqli_query($conexao, $sql2);
	
		mysqli_close($conexao);
		header("location:home.php");
	}
?>
<html>

	<form action = "" method = "post">

		Usuario que deseja excluir:
		<select name = "id">
			<?php
				for($i=0; $i<$linhas; $i++){
				$vetor = mysqli_fetch_array($query);
			?>
			<option name = "id" value = "<?=$vetor[0];?>">
				<?=$vetor[1];?>
			</option>
				
			<?php
				}
			?>
		</select>
		
		<input type = "submit" value = "Excluir" />
	
	</form>

</html>
