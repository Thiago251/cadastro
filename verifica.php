<?php 

if (isset($_POST['cadastrar'])) {
	$ns 			 = $_POST['ns'];
    $op 			 = $_POST['op'];
    $modelo  	 	 = $_POST['modelo'];
    $sintoma  		 = $_POST['sintoma'];
    $acao        	 = $_POST['acao'];
    $analisesuporte  = $_POST['analisesuporte'];
    $erro 			 = 0;

}


//Verifica se o campo está em branco
if (strlen($ns)> 9 || strstr($ns, '')==false) {
	echo "Quantidade de caracteres maior que o permitido.<br>";
	$erro = 1;
}

//Verifica se o campo tem 8 cacteres
if (strlen($op)> 8 || strstr($op, '')==false) {
	echo "Quantidade de caracteres maior que o permitido.<br>";
	$erro = 1;
}

//Verifica se o campo tem 5 cacteres
if (strlen($modelo)> 5 || strstr($modelo, '')==false) {
	echo "Quantidade de caracteres maior que o permitido.<br>";
	$erro = 1;
}

//Verifica se o campo estado está preenchido com 2 digitos
if (empty($sintoma)) {
	echo "Favor digitar o sintoma.<br>";
	$erro = 1;
}

//Verifica se o campo comentarios está vazio
if (empty($acao)) {
	echo "Favor digitar açao.<br>";
	$erro = 1;
}


//Verifica se o campo comentarios está vazio
if (empty($analisesuporte)) {
	echo "Favor digitar analise.<br>";
	$erro = 1;
}

//Verifica se não houve erro - neste caso chama a include para inserir os dados
if ($erro == 0) {
	echo "Todos os dados foram digitados corretamente.<br>";
	//include 'insere.inc';

}

//conexão com o banco de dados

 $Servidor = "localhost";
 $Banco = "reparo";
 $user = "root";
 $senha = "";


 $con = mysql_connect($localhost, $Banco, $user, $senha);

//verifica se a conexão esta ok

 if (!$con) {
 	die("conexao falhou.". mysqli_connect_error());
 }

 $sql = INSERT INTO cadastro ('ns', 'op', 'modelo', 'sintoma', 'acao', 'analisesuporte') VALUES ('$ns','$op', '$modelo', '$sintoma', '$acao' , '$analisesuporte');


 $rs = mysql_query($con, $sql);

 //Condição para confirmar se foi cadastrado

 if ($rs) {
 	echo "Cadastrado com sucesso";
 }

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Verifica</title>
	<meta charset="utf-8">
</head>
<body>
<center>
	
</center>



</body>
</html>