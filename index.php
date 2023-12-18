<!DOCTYPE html>
<html lang="pt-br" id="corpo">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BresoDEV</title>
</head>
<style>
	* {
		word-wrap: break-word;
		border-radius: 4px;
		margin: 0;
		padding: 0;
		border: none;
		font-family: "Lucida Sans", Geneva, Verdana, sans-serif;
		color: aliceblue;
	}

	html {
		background-color: #333;
	}

	.ct {
		margin-top: 10px;
		margin-left: 10%;
		width: 75%;
		padding: 10px;
		align-items: center;
		text-align: center;
		align-content: center;
	}

	.sucesso {
		padding: 5px;
		width: 80%;
		background-color: rgb(100, 200, 100);
		color: aliceblue;
		margin-top: 5px;
		margin-bottom: 5px;
	}

	.erro {
		padding: 5px;
		width: 80%;
		background-color: rgb(200, 100, 100);
		color: aliceblue;
		margin-top: 5px;
		margin-bottom: 5px;
	}

	.alerta {
		padding: 5px;
		width: 80%;
		background-color: orange;
		color: black;
		margin-top: 5px;
		margin-bottom: 5px;
	}

	

	input,button {
		width: 78%;
		resize: none;
		background-color: #666;
	}

	#escravo {
		position: fixed;
		top: 30px;
		right: 30px;
		height: 40px;
	}

	

	table {
		width: 50%;
		border: 1px solid red;
		margin-bottom: 20px;
	}

	td {
		width: 40%;
		text-align: left;
		padding: 3px;
	}
</style>

<body>
	<button id="escravo">Botaozinho</button>
	<br>
	<div class="ct">
		<table border="1">
			<tr>
				<th colspan="3">Elemento</th>
			</tr>
			<tr>
				<td>Tag:</td>
				<td><input type="text" id="Tag" value="button"></td>
				<td><button id="aplicar">Mudar</button></td>
			</tr>
			<tr>
				<td colspan="2"><button id="restart">Reiniciar</button></td>
				
			</tr>

		</table>

		<!----------->

		<table border="1">
			<tr>
				<th colspan="3">Cores de Fundo</th>
			</tr>
			<tr>
				<td>R:</td>
				<td><input type="range" id="r1" min="0" max="255"></td>
			</tr>
			<tr>
				<td>G:</td>
				<td><input type="range" id="r2" min="0" max="255"></td>
			</tr>
			<tr>
				<td>B:</td>
				<td><input type="range" id="r3" min="0" max="255"></td>
			</tr>
		</table>

		<!----------->
		<table border="1">
			<tr>
				<th colspan="2">Tamanho</th>
			</tr>
			<tr>
				<td>Largura:</td>
				<td><input type="range" value="250" id="r4" min="1" max="1000"></td>
			</tr>
			<tr>
				<td>Altura: <input type="checkbox" name="" id="cr5"></td>
				<td><input type="range" value="50" id="r5" min="1" max="1000"></td>
			</tr>
		</table>


		<!----------->
		<table border="1">
			<tr>
				<th colspan="2">Margin</th>
			</tr>
			<tr>
				<td>Cima:</td>
				<td><input type="range" value="0" id="r6" min="0" max="200"></td>
			</tr>
			<tr>
				<td>Direita:</td>
				<td><input type="range" value="0" id="r7" min="0" max="200"></td>
			</tr>
			<tr>
				<td>Baixo:</td>
				<td><input type="range" value="0" id="r8" min="0" max="200"></td>
			</tr>
			<tr>
				<td>Esquerda:</td>
				<td><input type="range" value="0" id="r9" min="0" max="200"></td>
			</tr>
		</table>

		<!----------->
		<table border="1">
			<tr>
				<th colspan="2">Borda</th>
			</tr>
			<tr>
				<td>Solida</td>
				<td><input type="checkbox" name="" id="borda1" checked></td>
			</tr>
			<tr>
				<td>Pontilhada</td>
				<td><input type="checkbox" name="" id="borda2"></td>
			</tr>
			<tr>
				<td>Cima:</td>
				<td><input type="range" value="0" id="r10" min="0" max="255"></td>
			</tr>
			<tr>
				<td>Direita:</td>
				<td><input type="range" value="0" id="r11" min="0" max="255"></td>
			</tr>
			<tr>
				<td>Baixo:</td>
				<td><input type="range" value="0" id="r12" min="0" max="255"></td>
			</tr>
			<tr>
				<td>Esquerda:</td>
				<td><input type="range" value="0" id="r13" min="0" max="255"></td>
			</tr>
			<tr>
				<th colspan="2">Cor da Borda</th>
			</tr>
			<tr>
				<td>R:</td>
				<td><input type="range" value="0" id="r14" min="0" max="255"></td>
			</tr>
			<tr>
				<td>G:</td>
				<td><input type="range" value="0" id="r15" min="0" max="255"></td>
			</tr>
			<tr>
				<td>B:</td>
				<td><input type="range" value="0" id="r16" min="0" max="255"></td>
			</tr>
		</table>


		<!----------->
		<table border="1">
			<tr>
				<th colspan="2">Border Radius</th>
			</tr>
			<tr>
				<td>Cima:</td>
				<td><input type="range" value="0" id="r17" min="0" max="150"></td>
			</tr>
			<tr>
				<td>Direita:</td>
				<td><input type="range" value="0" id="r18" min="0" max="150"></td>
			</tr>
			<tr>
				<td>Baixo:</td>
				<td><input type="range" value="0" id="r19" min="0" max="150"></td>
			</tr>
			<tr>
				<td>Esquerda:</td>
				<td><input type="range" value="0" id="r20" min="0" max="150"></td>
			</tr>
		</table>


<!----------->
<table border="1">
			<tr>
				<th colspan="2">Fonte</th>
			</tr>
			<tr>
				<td>Tamanho:</td>
				<td><input type="range" value="20" id="r21" min="0" max="150"></td>
			</tr>
			<tr>
				<td>R:</td>
				<td><input type="range" value="0" id="r22" min="0" max="255"></td>
			</tr>
			<tr>
				<td>G:</td>
				<td><input type="range" value="0" id="r23" min="0" max="255"></td>
			</tr>
			<tr>
				<td>B:</td>
				<td><input type="range" value="0" id="r24" min="0" max="155"></td>
			</tr>
		</table>



		<script>

			document.getElementById('aplicar').addEventListener('click', () => {
				//Tag
				var el =document.createElement(document.getElementById('Tag').value)
				document.getElementById('escravo').replaceWith(el);
				el.id = 'escravo';
				el.innerHTML = 'Meu elemento';
				el.value = 'Meu elemento';
			});

			document.getElementById('restart').addEventListener('click', () => {
				//Tag
				window.location.reload();
			});




			const cr5 = document.getElementById('cr5');
			
			const corpo = document.getElementById('corpo');
			const r1 = document.getElementById('r1');
			const r2 = document.getElementById('r2');
			const r3 = document.getElementById('r3');

			const r4 = document.getElementById('r4');
			const r5 = document.getElementById('r5');

			const r6 = document.getElementById('r6');
			const r7 = document.getElementById('r7');
			const r8 = document.getElementById('r8');
			const r9 = document.getElementById('r9');

			const r10 = document.getElementById('r10');
			const r11 = document.getElementById('r11');
			const r12 = document.getElementById('r12');
			const r13 = document.getElementById('r13');
			const borda0 = document.getElementById('borda0');
			const borda1 = document.getElementById('borda1');
			const borda2 = document.getElementById('borda2');
			const r14 = document.getElementById('r14');
			const r15 = document.getElementById('r15');
			const r16 = document.getElementById('r16');

			const r17 = document.getElementById('r17');
			const r18 = document.getElementById('r18');
			const r19 = document.getElementById('r19');
			const r20 = document.getElementById('r20');

			const r21 = document.getElementById('r21');
			const r22 = document.getElementById('r22');
			const r23 = document.getElementById('r23');
			const r24 = document.getElementById('r24');

			setInterval(() => {
				var escravo = document.getElementById('escravo');

				escravo.style.backgroundColor = 'rgb(' + r1.value + ' ' + r2.value + ' ' + r3.value + ')';

				escravo.style.width = r4.value + 'px';
				if (cr5.checked)
					escravo.style.height = r5.value + 'px';

				escravo.style.marginTop = r6.value + 'px';
				escravo.style.marginRight = r7.value + 'px';
				escravo.style.marginBottom = r8.value + 'px';
				escravo.style.marginLeft = r9.value + 'px';

				escravo.style.borderTop = r10.value + 'px';
				escravo.style.borderRight = r11.value + 'px';
				escravo.style.borderBottom = r12.value + 'px';
				escravo.style.borderLeft = r13.value + 'px';

				if (borda1.checked)
					escravo.style.borderStyle = 'solid';
				if (borda2.checked)
					escravo.style.borderStyle = 'dotted';

				escravo.style.borderColor = 'rgb(' + r14.value + ' ' + r15.value + ' ' + r16.value + ')';
				escravo.style.borderRadius = r17.value + '% ' + r18.value + '% ' + r19.value + '% ' + r20.value + '%';

				escravo.style.fontSize = r21.value + 'px';
				escravo.style.color = 'rgb(' + r22.value + ' ' + r23.value + ' ' + r24.value + ')';
				

			}, 1);
/*
   linear-gradient(to right, rgb(255,255,255), rgb(255,255,255));
   background-color: rgb(255 255 255);
   border-radius: 10px  10px  10px  10px;
   width: 200px;
   height: 200px;
   font-size: : 20px;
   color: rgb(0 0 0);
   border: 0px solid;
   box-shadow: 0px 0px 0px rgba(10,10,10,0.5);
   opacity: 0.9;*/
		</script>



	</div>
</body>

</html>