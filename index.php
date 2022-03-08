<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!-- Meta tags -->
	<meta charset="utf-8" />
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="./jquery3.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
</head>

<body style="height: 100vh">
	<div class="d-flex h-100 justify-content-center">
		<form action="./code.php" class="align-self-center">
			<h2>Gerador de assinaturas de e-mail</h2>
			<div class="mb-3 mt-5">
				<label for="name" class="form-label">Nome e sobrenome</label>
				<input required type="text" class="form-control" id="nome" name="nome" aria-describedby="nameHelp">
				<!-- <div id="nameHelp" class="form-text">We'll never share your email with anyone else.</div> -->
			</div>
			<div class="mb-3">
				<label for="job" class="form-label">Cargo</label>
				<input required type="text" class="form-control" id="cargo" name="cargo">
			</div>
			<div class="mb-3">
				<label for="phone" class="form-label">Telefone</label>
				<input type="text" class="form-control" id="telefone" name="telefone" aria-describedby="telefoneNObrigatorio">
				<div id="telefoneNObrigatorio" class="form-text">Deixe em branco se quiser usar o telefone padrão da Cyclopay.</div>
			</div>
			<div class="row pt-4 px-2">
				<button type="submit" class="btn btn-primary">
					Gerar!
				</button>
			</div>
		</form>
</body>
<script>
	jQuery("#telefone")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });
</script>

</html>