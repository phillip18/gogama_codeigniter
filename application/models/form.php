<?php 

	date_default_timezone_set('America/Sao_Paulo');

	$servername = "vendaaprovada.com.br.mysql";
	$username = "vendaaprovada_com_br";
	$password = "4Adn9jR9";
	$dbname = "vendaaprovada_com_br";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	//Concatena pnome e unome
	$email = strip_tags(htmlspecialchars($_POST['email']));
	$nome = strip_tags(htmlspecialchars($_POST['pnome'])) . ' ' . strip_tags(htmlspecialchars($_POST['unome']));
	$empresa = strip_tags(htmlspecialchars($}_POST['empresa']));

	//Cria o codigo_ativacao e seta a data do cadastramento
	$ip = $_SERVER["REMOTE_ADDR"];
	$data_hora = date("Y-m-d H:i:s");
	//Monta a query de inserção na tabela

	$sql = "INSERT INTO CADASTRO (email, nome, ip, data_hora, empresa)
	VALUES ('$email', '$nome', '$ip', '$data_hora', '$empresa')";

	if ($conn->query($sql) === TRUE) {
		header("Location: ../");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>