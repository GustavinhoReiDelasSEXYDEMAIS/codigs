<?php
		require_once("postagem.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css" href="script.js">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<head>
	<title> usuário </title>
	
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styleperfil.css" href="script.js">
	<title>Compara!</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
	<header>
				<button id="myBtn">fazer postagem</button>

			<!-- The Modal -->
			<div id="myModal" class="modal">

			  <!-- Modal content -->
			  <form method="POST" enctype="multipart/form-data" >
					<fieldset>
							<div class="modal-body">
						<div class="container-fluid">
						<div class="row">
						<div class="col-4"> <form action="postagem.php" method="POST"  enctype="multipart/form-data" class="formPost">
							<select name="titulo" id="titulo">
								<?php
									require_once("conecta.php");

									$sql = "SELECT * FROM lojas ORDER BY nome ASC";

									$registros = mysqli_query($conn, $sql);

									if (mysqli_num_rows($registros) > 0){
									while ($registro = mysqli_fetch_array($registros)){
										echo("<option value='$registro[id]'>$registro[nome]</option>");
									}
								}
								?>
							</select> </div>
						<div class="col-4"><label for="categoria"></label>
						<select id="categoria" name="categoria" style="color: white" >
						<option value="sc">selecionar categoria</option>
						<option value="sc1">sc1</option>
						<option value="sc2">sc2</option>
					</select></div>
						<div>
						</div>
					</div>
						</div>
							<div class="row">
							</div>
							<div class="row">
							<div class="col-md-6 ml-auto"> <form action="postagem.php" method="POST"  enctype="multipart/form-data" class="formPost">
							<textarea name="descricao" id="descricao" style="min-width:500px; max-width:100%;min-height:50px;height:100%;width:100%;" placeholder="Ouviu falar de alguma promoção?"></textarea></div>
							</div>
							<div class="row">
							<div class="col-sm-9">
									<form action="postagem.php" method="POST"  enctype="multipart/form-data" class="formPost">
							<textarea name="preco" id="preco" placeholder="preço" style="min-width:500px; max-width:100%;min-height:50px;height:100%;width:10%;"></textarea></div>
							</div>
								<div class="row">
								<div class="col-8 col-sm-6">
									*obrigatório
								</div>
								<div class="col-8 col-sm-3">
									<input name="imagem" id="imagem" type="file">
								</div>
								</div>
								</div>
								<div class="row">
									<div class="col-10 col-sm-6">
										<button> cancelar </button>
				</div>
									<div class="col-10 col-sm-3">
										<input type="submit" name="enviar" value="Enviar" class="btn btn_primary">
										
		    </div>
 </div>
</div>

		        </div>
		      </div>
		    </div>
		  </div>
</div>
	</header>
	</fieldset>
</form>
	<main class="main">
							<ul class="perfil">
					
				</ul>
			</div>

	<main class="main">
 				 <div class="d-flex border flex-row">
   				 <div class="col-1 border flex-column">
					<li class="example-item perfils">
						<div class="infoperfil">
							<div class ="imgperfil"></div>
							
							<div class="NomeeHora">
								<img src="https://static.poder360.com.br/2021/07/faustao.png" alt="fotodousuário" width="10%" id="lol" >
								<strong> Gosave Dranft</strong>	
								<button class="btneditperfil"><img src="https://cdn.cms-twdigitalassets.com/content/dam/help-twitter/en/twitter-tips/desktop-assets/ch-02/ch-2-3-follow-button.png.twimg.1920.png" background="invisible" width="10%" alt="imagem">		
								<strong> 25 seguidores / 25 seguindo </strong>
								<button class="btnfollow"><img src="https://www.imagensempng.com.br/wp-content/uploads/2021/09/Icone-lapis-Png-1024x1024.png" background="invisible" width="10%" alt="imagem">					
							</div>
					</div>
					</li>

				</ul>

			</div>
		  <div class="col-1">
		  	<p> s</p>
		  </div>
					<div class="col-10 border">
						<ul class="posts">
						<li class=" example-item post">
							<div class ="imgUserPost"></div>
							
							<div class="NomeeHora">
								<img src="https://static.poder360.com.br/2021/07/faustao.png" alt="fotodousuário" width="10%" id="lol" >
								<strong> Gosave Dranft</strong>
								<p>endereço </p>
							
							
						</div>
						<p> lore ypisulum pothergoheasd florekamskdms cloreato</p>
						<img src="" alt= "imagem" width="5%">
						<p> 10,99 Kg </p>
						<div class="Botoespost">
						<button class="like-button">
						  <div class="like-wrapper">
						    <div class="ripple"></div>
						    <svg class="heart" width="24" height="24" viewBox="0 0 24 24">
						      <path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z"></path>
						    </svg>
						    <div class="particles" style="--total-particles: 6">
						      <div class="particle" style="--i: 1; --color: #7642F0"></div>
						      <div class="particle" style="--i: 2; --color: #AFD27F"></div>
						      <div class="particle" style="--i: 3; --color: #DE8F4F"></div>
						      <div class="particle" style="--i: 4; --color: #D0516B"></div>
						      <div class="particle" style="--i: 5; --color: #5686F2"></div>
						      <div class="particle" style="--i: 6; --color: #D53EF3"></div>
						    </div>
						  </div>
						</button>

					</li>
				</div>
			</div>	
		<script>
			// Get the modal
		var modal = document.getElementById("myModal");
		
		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");
		
		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];
		
		// When the user clicks the button, open the modal 
		btn.onclick = function() {
  		modal.style.display = "block";
		}
		
		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
  		modal.style.display = "none";
		}
		
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
  		if (event.target == modal) {
    		modal.style.display = "none";
  		}
		}
</script> 
	</main>



</body>
</html>
<div class="row">
