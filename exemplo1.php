<?php
	//Conecta com o banco de dados
	$conexao = mysqli_connect("localhost", "Amanda", "Amanda");
	
	if($conexao){
		echo "Conectou ao Banco de Dados<br />";
	}
	else{
		
		echo "Não conectou";
		//Se ocorrer algum erro, mostra o numero do erro
		echo "Numero:" . mysqli_connect_errno() . "<br />";
		//Descrição do erro
		echo "Descricao:" . mysqli_connect_error() . "<br />";
		
	}
	
	//seleciona o banco de dados 
	mysqli_select_db($conexao, "exemplo");
	
	//exemplo de inserção no BD
	$sql = "INSERT INTO Contato(nome, endereco, telefone) VALUES ('Amanda', 'Rua 2', '33221426')";
	
	//executa o comando no BD
	mysqli_query($conexao, $sql);
	
	//fecha a conexao
	mysqli_close($conexao);
	
?>