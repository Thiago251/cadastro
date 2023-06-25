<?php  



//conexão com o banco de dados

 $host = "localhost";
 $banco = "reparo";
 $user = "root";
 $senha = "";


 $con = mysql_connect($host, $banco, $user, $senha);

//verifica se a conexão esta ok

 if (!$con) {
 	die("conexaao falhou.".mysql_error());
 }

 $sql = INSERT INTO 'cadastro' ('ns', 'op', 'modelo', 'sintoma', 'acao', 'analisesuporte') VALUES ('$ns','$op', '$modelo', '$sintoma', '$acao' , '$analisesuporte');


 $rs = mysql_query($con, $sql);

 //Condição para confirmar se foi cadastrado

 if ($rs) {
 	echo "Cadastrado com sucesso"
 }

 ?>