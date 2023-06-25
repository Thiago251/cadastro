<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Reparo</title>
	<meta charset="UTF-8">
	<button>Defina a cor que deseja.</button>


</head>

 <link rel="stylesheet" type="text/css" href="/opt/lampp/htdocs/css/styles.css">

<script type="text/javascript">

	 var btn = document.querySelector('button');

function random(number) {
  return Math.floor(Math.random()*(number+1));
}

btn.onclick = function() {
  var rndCol = 'rgb(' + random(255) + ',' + random(255) + ',' + random(255) + ')';
  document.body.style.backgroundColor = rndCol;
}

</script>

<body>

		
	<center>

<strong>


<h1>Cadastro de Reparo</h1>
<br>

<h1>

<form method="POST" id="cadastro" action="verifica.php">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

 <pre>

Insira as informações para efetuar o cadastro .

NS:	<input type="text" size="35" maxlength="255" name="ns">

OP: <input type="text" size="35" maxlength="255" name="op">

Modelo: <input type="text" size="35" maxlength="255" name="modelo">

Sintoma: <input type="text" size="35" maxlength="255" name="sintoma">

Ação: <input type="text" size="35" maxlength="255" name="acao">

Analisesuporte: <input type="text" size="35" maxlength="255" name="analisesuporte">

<input type="submit" value="Efetuar Cadastro" name="enviar">
</pre>

   </strong>

  		</form>
</h1>  		
			</center>
		
	</body>
</html>