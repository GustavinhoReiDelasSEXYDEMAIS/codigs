<?php
if (isset($_POST['enviar']) == true) {
	require_once("conecta.php");
	$titulo = $_POST["titulo"];
	$descricao = $_POST["descricao"];
	$preco = $_POST["preco"];
	$uploadfile = "";
		if ($_FILES['imagem']['error'] != 4){
				echo("Tem foto");
				$uploaddir = 'imagem/';
				$ext = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
				$nome_arquivo = time() . "." . $ext;
				$uploadfile = $uploaddir . $nome_arquivo;

				$sql = "INSERT INTO postagem (titulo, descricao, imagem, preco, favoritos) VALUES ('$titulo', '$descricao', '$nome_arquivo', '$preco', 0)";

			} else {
				echo "nao tem foto";
			}
	


		if (mysqli_query($conn, $sql)){
				$_SESSION["msg_sucesso"] = "Contato adicionado com sucesso!";
			} else {
				
			}

			mysqli_close($conn);
		}
?>
