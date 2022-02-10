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
	<canvas id="canvas"></canvas>
	<div class="d-flex h-100 justify-content-center">
		<?php
		// shell_exec('if exist %APPDATA%\Microsoft\Assinaturas\ ( explorer %APPDATA%\Microsoft\Assinaturas\ ) else ( explorer %APPDATA%\Microsoft\Signatures\ )'); 
		?>
		<section id="codeHtml" class="align-self-center">
			<a href="https://cyclopay.com" style=" display: inline-block" target="_blank">
				<img id="logo" src="http://cyclopay.martinluz.com.br/site/email/logoby.svg" width="370px" style="width: 370px; margin-right: 42px; " />
			</a>
			<div style="display: inline-block; vertical-align: middle; height: 120px; padding: 10px 0 10px 35px; border-left: 1px solid #ccc; ">
				<h3 class="name" style="color: #1536be; font-size: 20px; font-family: Arial; font-family: Calibri; font-weight: 800; text-transform: capitalize; margin-bottom: 0px"></h3>
				<h4 class="job" style="color: #a00aaf; font-size: 14px; font-family: Arial;  font-style: italic; font-weight: 600; text-transform: capitalize; margin-bottom: 0px"></h4>
				<a href="tel:5511945349787" style="display: inline-block; margin-bottom: 3px; text-decoration: none;  color: #4e4b5b" target="_blank">
					<img id="whats" src="http://cyclopay.martinluz.com.br/site/email/whatsapp.svg" width="36px" style="width: 36px; " />
					<h4 id="tel" style="display: inline-block; font-size: 14px; font-family: Arial; font-family: Calibri; font-weight: 600; ">tel: +55 (11) 94534-9787</h4>
				</a>
				<br />
				<img id="whats" src="http://cyclopay.martinluz.com.br/site/email/SOCIAL-01.svg" width="34px" style="width: 34px; margin-right: -10px" />
				<img id="whats" src="http://cyclopay.martinluz.com.br/site/email/SOCIAL-03.svg" width="34px" style="width: 34px; margin-right: -7px" />
				<img id="whats" src="http://cyclopay.martinluz.com.br/site/email/SOCIAL-02.svg" width="34px" style="width: 34px; margin-right: -7px" />
				<img id="whats" src="http://cyclopay.martinluz.com.br/site/email/SOCIAL-04.svg" width="34px" style="width: 34px; " />
			</div>
		</section>

		<!-- são necessários dois blocos, pois as widths das imagens não 
		correspondem no html e Outlook. Acima, o código html (exibido), 
		abaixo, o código editado via plataforma Outlook (exportado) -->

		<!-- também é válido lembrar que o boostrap aplicado não será mantido na exportação -->

		<main class="align-self-center d-none">
			<table class="MsoNormalTable" border="0" cellpadding="0" style="
				mso-cellspacing: 1.5pt;
				mso-yfti-tbllook: 1184;
				mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;
				">
				<tr style="
					mso-yfti-irow: 0;
					mso-yfti-firstrow: yes;
					mso-yfti-lastrow: yes;
					height: 15pt;
					">
					<td width="500" style="width: 375pt; padding: 0.75pt 0.75pt 0.75pt 0.75pt; height: 15pt">
						<p class="MsoNormal">
							<span style="mso-fareast-font-family: 'Times New Roman'">
								<a href="https://cyclopay.com/" target="_blank">
									<span style="text-decoration: none; text-underline: none">
										<img border="0" width="460" height="260" id="_x0000_i1031" src=" data:image/png;base64,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" style="margin-right: 42px; width: 370px" />
										<!-- <img border="0" width="460" height="260" id="_x0000_i1031" src="http://cyclopay.martinluz.com.br/site/email/logoby.svg" style="margin-right: 42px; width: 370px" /> -->
									</span>
								</a>
								<o:p></o:p>
							</span>
						</p>
					</td>
					<td style="padding: 0.75pt 0.75pt 0.75pt 0.75pt; height: 15pt">
						<div style="
							border: none;
							border-left: solid #cccccc 1pt;
							mso-border-left-alt: solid #cccccc 0.75pt;
							padding: 0cm 0cm 0cm 26pt;
							display: inline-block;
							" height="20">
							<h3 style="margin-bottom: 0cm; vertical-align: middle">
								<span id="name" style="
								mso-fareast-font-family: 'Calibri';
								color: #1536be;
								font-size: 20px;
								color: #1536be;
								font-family: Calibri;
								font-weight: 800;
								text-transform: capitalize;
								margin-bottom: 0px;
								">
								</span>
								<br />
								<i style="margin-top: 0px">
									<span id="job" style="
									font-size: 10.5pt;
									font-family: 'Arial', sans-serif;
									mso-fareast-font-family: 'Times New Roman';
									mso-fareast-font-family: 'Calibri';
									color: #a00aaf;
									font-size: 14px;
									font-style: italic;
									font-weight: 600;
									text-transform: capitalize;
									margin-bottom: 0px;
									">
									</span><br /></i>
								<a href="tel:5511945349787" target="_blank" style="
									font-size: 14px;
									font-family: Arial;
									font-family: Calibri;
									font-weight: 600;
									">
									<span style="
										color: #4e4b5b;
										text-decoration: none;
										text-underline: none;
										">
										<img border="0" width="36" height="36" id="_x0000_i1032" src="http://cyclopay.martinluz.com.br/site/email/whatsapp.svg" style="width: 36px" />
									</span>
								</a>
								<span style="
									font-size: 10.5pt;
									mso-fareast-font-family: 'Times New Roman';
									color: #4e4b5b;
									">
									<a href="tel:5511945349787" target="_blank">
										<span style="color: #4e4b5b">tel: +55 (11) 94534-9787
										</span>
									</a>
								</span>
								<span style="mso-fareast-font-family: 'Times New Roman'"><br />
									<a href="tel:5511945349787" target="_blank">
										<span>
											<img id="_x0000_i1033" src="http://cyclopay.martinluz.com.br/site/email/SOCIAL-01.svg" style="height: 34px; margin-right: -10px; width: 34px" width="36" height="36" border="0">
										</span>
									</a>
									<a href="tel:5511945349787" target="_blank">
										<span>
											<img id="_x0000_i1034" src="http://cyclopay.martinluz.com.br/site/email/SOCIAL-03.svg" style="height: 34px; margin-right: -7px; width: 34px" width="36" height="36" border="0">
										</span>
									</a>
									<a href="tel:5511945349787" target="_blank">
										<span>
											<img id="_x0000_i1035" src="http://cyclopay.martinluz.com.br/site/email/SOCIAL-02.svg" style="height: 34px; margin-right: -7px; width: 34px" width="36" height="36" border="0">
										</span>
									</a>
									<a href="tel:5511945349787" target="_blank">
										<span>
											<img id="_x0000_i1036" src="http://cyclopay.martinluz.com.br/site/email/SOCIAL-04.svg" style="height: 34px; width: 34px" width="36" height="36" border="0"></span><span style="font-size: 11pt">
										</span>
									</a>
									<o:p></o:p>
								</span>
							</h3>
						</div>
					</td>
				</tr>
			</table>
		</main>

	</div>
	<div id="info" class="p-4">
		<h5>Em seu Outlook, navegue para "Novo Email > Assinatura > Assinaturas > Novo".
			<br />
			Adicione um nome à sua assinatura. Aperte "OK".
			<br />
			<br />
			Na pasta %APPDATA%\Microsoft\Signatures ( ou Assinaturas), edite o arquivo <i>".htm"</i> que tem o mesmo nome da assinatura que já foi criada.
			<br />
			Selecione todo o conteúdo do arquivo (ctrl + A), e apague.
			<br />
			<br />
			Copie o código abaixo, e cole dentro deste arquivo. Salve e feche.
		</h5>
	</div>
	<button class="copiar m-4 btn btn-primary" onclick="copyToClipboard($('code').text())">Copiar</button>

	<pre><code></code></pre>

	<script src="./jquery3.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script type="text/javascript">
		function copyToClipboard(textToCopy) {
			// console.log(textToCopy)
			// navigator clipboard api needs a secure context (https)
			if (navigator.clipboard && window.isSecureContext) {
				// navigator clipboard api method'
				return navigator.clipboard.writeText(textToCopy) && alert('Copiado!');
			} else {
				// text area method
				let textArea = document.createElement("textarea");
				textArea.value = textToCopy;
				// make the textarea out of viewport
				textArea.style.position = "fixed";
				textArea.style.left = "-999999px";
				textArea.style.top = "-999999px";
				document.body.appendChild(textArea);
				textArea.focus();
				textArea.select();
				return new Promise((res, rej) => {
					// here the magic happens
					document.execCommand('copy') ? res() : rej();
					textArea.remove();
				});
			}
		}

		jQuery(window).ready(function($) {
			var url_string = window.location.href;
			var url = new URL(url_string);
			var nome = url.searchParams.get("nome");
			var cargo = url.searchParams.get("cargo");

			displayCodeOnScreen = function() {
				var code = $("code");
				var main = $("main");
				var mainInner = main.prop("innerHTML");
				code.text(mainInner);
				$('body,html').delay(2000).animate({
					scrollTop: $("#info").offset().top
				}, 1000);
			};

			gerar = function() {
				// imageToMatrix('logo'); 
				$("#name, #codeHtml .name").text(nome);
				$("#job, #codeHtml .job").text(cargo);
				displayCodeOnScreen();
			};
			gerar();

			function convertImageToBase64() {
				base_image = new Image();
				base_image.src = './logoby.svg';
				console.log(base_image);
				// canvas.width = $(window).width(); //change the canvas size
				// canvas.height = $(window).height(); 
				document.getElementById('canvas').getContext('2d').drawImage(base_image, 0, 0);
				var image = canvas.toDataURL("image/png") // here is the most important part because if you dont replace you will get a DOM 18 exception.
				// var image = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream"); // here is the most important part because if you dont replace you will get a DOM 18 exception.
				console.log(image);
			}
			convertImageToBase64();

			// imageToCanvas = function() {
			// 	var canvas = document.getElementById('canvas'); 
			// 	var context = canvas.getContext('2d'); 

			// 	function make_base() {
			// 		base_image = new Image(); 
			// 		base_image.src = './ML.jpg'; 
			// 		console.log(base_image); 
			// 		// canvas.width = $(window).width(); //change the canvas size
			// 		// canvas.height = $(window).height(); 
			// 		context.drawImage(base_image, 0, 0); 
			// 		var image = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream"); // here is the most important part because if you dont replace you will get a DOM 18 exception.
			// 		console.log(image); 
			// 		canvas = image; 
			// 	}
			// 	make_base(); 

			// }
			// imageToCanvas(); 

			// var fileURLs = ['./SOCIAL-01.svg', './SOCIAL-02.svg', './SOCIAL-03.svg', './SOCIAL-04.svg', './whatsapp.svg', './logoby.svg']; 
			// var zip = new JSZip(); 
			// var count = 0; 

			// onDownloadComplete = function() {
			// 	console.log(1)
			// }
			// downloadFile(fileURLs[count], onDownloadComplete); 

			// function downloadFile(url, onSuccess) {
			// 	var xhr = new XMLHttpRequest(); 
			// 	xhr.open('GET', url, true); 
			// 	xhr.responseType = "blob"; 
			// 	xhr.onreadystatechange = function() {
			// 		if (xhr.readyState == 4) {
			// 			if (onSuccess) onSuccess(xhr.response); 
			// 		}

			// 		function onDownloadComplete(blobData) {
			// 			if (count < fileURLs.length) {
			// 				blobToBase64(blobData, function(binaryData) {
			// 					// add downloaded file to zip:
			// 					var fileName = fileURLs[count].substring(fileURLs[count].lastIndexOf('/') + 1); 
			// 					zip.file(fileName, binaryData, {
			// 						base64: true
			// 					}); 
			// 					if (count < fileURLs.length - 1) {
			// 						count++; 
			// 						downloadFile(fileURLs[count], onDownloadCompleted); 
			// 					} else {
			// 						// all files have been downloaded, create the zip
			// 						var content = zip.generate(); 

			// 						// then trigger the download link:    
			// 						var zipName = 'download.zip'; 
			// 						var a = document.createElement('a'); 
			// 						a.href = "data:application/zip; base64," + content; 
			// 						a.download = zipName; 
			// 						a.click(); 
			// 					}
			// 				}); 
			// 			}
			// 		}

			// 		function blobToBase64(blob, callback) {
			// 			var reader = new FileReader(); 
			// 			reader.onload = function() {
			// 				var dataUrl = reader.result; 
			// 				var base64 = dataUrl.split(',')[1]; 
			// 				callback(base64); 
			// 			}; 
			// 			reader.readAsDataURL(blob); 
			// 		}

			// 		function calculateAndUpdateProgress(evt) {
			// 		}
			// 	}
			// }
		});
	</script>

</body>

</html>