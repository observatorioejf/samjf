<?php

//utilização de namespaces
namespace controle;
include 'processaAcesso.php';
include '../conn.php';
use processaAcesso as processaAcesso;
$controle = new \processaAcesso\ProcessaAcesso;

if ($_POST['enviar']) {

    $login = $_POST['login'];
    $senha =($_POST['senha']);

    $usuario = $controle->verificaAcesso($login, $senha);

    //redirecionando para pagina conforme o tipo do usuário
    if ($usuario[0]['id_tipo_acesso'] == 2) {
	
		// Se a sessão não existir, inicia uma
		  if (!isset($_SESSION)) session_start();
		  // Salva os dados encontrados na sessão
		  $_SESSION['UsuarioID'] = $login;
		  /* $_SESSION['LoginUsuario'] = $return_result['login_usuario'];
		  $_SESSION['IdTipoAcesso'] = $return_result['id_tipo_acesso']; */
		
		//Salva o log 
		$ip = $_SERVER['REMOTE_ADDR']; // Salva o IP do visitante
		$hora = date('Y-m-d H:i:s');
		$usuario = $_SESSION['UsuarioID'];
		$tabela = "-";
		$sistema = "samjf";
		
		$mensagem = "Logon confirmado. Usuário = $usuario.";
		$mensagem = mysqli_real_escape_string($conn, $mensagem);
		
		mysqli_select_db($conn, "adm") or print(mysqli_error($conn));
		
		$sql = "INSERT INTO logs VALUES (NULL, '" . $hora . "', '" . $ip . "', '" . $mensagem . "', '" . $tabela . "', '" . $usuario . "', '" . $sistema . "')";
		mysqli_query($conn, $sql);
		
		// Redireciona o visitante
        header("Location:paginas/adm_samjf.php");
		
    } else if ($usuario[0]['id_tipo_acesso'] != 2) {
		header("Location:paginas/error.php");
		
    }
}
mysqli_close($conn)
?>