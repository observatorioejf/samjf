<?php
//include de sessão.
include	("include/validacao.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="crud, cadastro de clientes e filtro, php, mysql, crud php mysql">
	<meta name="description" content="administre os seus clientes, banco de dados completo em www.montepage.com.br">
	<title>SAMJF - Meta13</title>
	<link rel="stylesheet" type="text/css" href="css/easyui.css">
	<link rel="stylesheet" type="text/css" href="css/icon.css">
	<link rel="stylesheet" type="text/css" href="css/demo.css">
	<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="js/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="js/jquery.edatagrid.js"></script>
	<script type="text/javascript" src="js/datagrid-filter.js"></script>
	<script type="text/javascript">
		$(function(){
			$("div.easyui-layout").layout();
			$('#dg').edatagrid({
				url: 'get_samjf_m12_serv_tri_2016.php',
				saveUrl: '',
				updateUrl: 'update_samjf_m12_serv_tri_2016.php',
				destroyUrl: '',
				fitColumns: true
			});
			var dg = $('#dg');
			dg.edatagrid();    // create datagrid
			dg.edatagrid('enableFilter');    // enable filter
		});
	</script>
</head>
<body>
	<div class="easyui-layout">
	<h2>Meta 13. Manter, em todos os anos, o absenteísmo de Servidores abaixo ou igual a 3%. </h2>
	
	<?php
		include ("include/instrucoes.php");
	?>
	
	<table id="dg" title="" style="width:700px;height:500px; border:1px solid #ccc;"
			toolbar="#toolbar" pagination="true" idField="id"
			rownumbers="true" fitColumns="true" resizable="true">
		<thead>
			<tr>
				<th field="orgao" width="50" editor="text">Órgão</th>
				<th field="referencia" width="50" editor="text">Referência</th>
				<th field="ano" width="50" editor="text">Ano</th>
				<th field="proc" width="50" editor="text">Instância</th>
				<th field="p121" width="50" editor="text">P13.1*</th>
				<th field="p122" width="50" editor="text">P13.2*</th>			
				<th field="p123" width="50" editor="text">P13.3*</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<!--<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="javascript:$('#dg').edatagrid('addRow')">Novo</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="javascript:$('#dg').edatagrid('destroyRow')">Remover</a>-->
		<a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="javascript:$('#dg').edatagrid('saveRow')">Salvar</a>
		<!--<a href="#" class="easyui-linkbutton" iconCls="icon-undo" plain="true" onclick="javascript:$('#dg').edatagrid('cancelRow')">Cancelar</a>-->
	</div>
	<?php
		include ("include/fim_meta.php");
	?>
	</div>
	
</body>
</html>