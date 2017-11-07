<?php
	include 'conn.php';
	include 'timezone.php';
//teste para o log;
	$acao = "Alteração no indentificador - > $id";
	$nome = "Tabela - > $nomeTabela";
	$sqlLog = "insert into logs(nomeAcao,nomeTabela,tempoAcao) values ('$acao','$nome','$tempoAtual')";
	@mysqli_query($conn, $sqlLog);
?>