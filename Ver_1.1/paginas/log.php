<?php
	include '../../../conn.php'; mysqli_select_db($conn, 'samjf');
	include 'timezone.php';
//teste para o log;
	$acao = "Alteração no indentificador - > $id";
	$nome = "Tabela - > $nomeTabela";
	$sqlLog = "insert into logs(nomeAcao,nomeTabela,tempoAcao) values ('$acao','$nome','$tempoAtual')";
	@mysqli_query($conn, $sqlLog);
?>