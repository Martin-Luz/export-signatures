<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!-- Meta tags -->
	<meta charset="utf-8" />
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body style="height: 100vh">
	<div class="d-flex h-100 justify-content-center">
		<form action="./code.php" class="align-self-center">
			<h2>Gerador de assinaturas de e-mail</h2>
			<div class="mt-5" style="text-align: center">
				<div class="row justify-content-center">
					<label style="text-align: start" class="w-75 mb-1" for="cargo">Nome e Sobrenome</label>
					<input type="text" name="nome" id="nome" class="w-75" required placeholder="Insira seu nome completo" />
				</div>
				<div class="row justify-content-center mt-3">
					<label style="text-align: start" class="w-75 mb-1" for="cargo">Cargo</label>
					<input type="text" name="cargo" id="cargo" class="w-75" required placeholder="Insira seu cargo" />
				</div>
			</div>
			<!-- <input type="text" name="email" id="email" required placeholder="Insira seu e-mail" /> -->
			<div class="row pt-4 px-2">
				<button type="submit" class="btn btn-primary">
					Gerar!
				</button>
			</div>
		</form>
		<script src="./jquery3.js"></script>
</body>

</html>