<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
/*h3 {
    color: blue;
    font-family: verdana;
    font-size: 200%;
}*/
p  {
    color: red;
    font-family: courier;
    font-size: 100%;
	text-align: center;
}
div#alinha	{
	width: 800px;
    height: 200px;
    margin-left: -100px; /* metade da largura */
    margin-top: -100px; /* metade da altura */
    position: absolute;
    top: 40%;
    left: 35%;
	border: 1px solid #cfcfcf;
	
	
}

/* BOTÃO INTUITIVO */
 
.but {
display: inline-block;
background-color: #F67A6E none repeat scroll 0% 0%;
color: #444;
padding: 10px 20px;
text-decoration: none;
box-sizing: border-box;
font-family: Helvetica, Arial, sans-serif;
font-size: 14px;
border: 1px;
border-radius: 3px;
position: absolute;
width: 300px;
margin_bottom: 14px;
}
.but:hover {
background-image: linear-gradient(to bottom, transparent, rgba(0,0,0,.15));
cursor: pointer;
}
#buttomposit {
position: absolute;
left: 30%;
/*top: 120px;*/
}
</style>
</head>
<body>
	<div id="alinha">
		<h1><p>Usuário e senha incorretos!</br>Favor insira os valores novamente.</p></h1>
		<button class="but" id="buttomposit" onClick="window.history.back();">Voltar</button>
	</div>	
</body>
</html>

<!--<button class="btn btn-lg btn-login btn-block" type="submit" id="acao" name="acao" value="logar"">Entrar</button>-->