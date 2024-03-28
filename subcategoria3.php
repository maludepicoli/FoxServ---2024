<?php include_once("config.php");
	
	
	$idTipoServico3 = $_REQUEST['idTipoServico3'];
	
	$result_sub_cat3 = "SELECT * FROM servico WHERE idTipoServico = $idTipoServico3";
	$resultado_sub_cat3 = mysqli_query($conexao, $result_sub_cat3);
	
	while ($row_sub_cat3 = mysqli_fetch_assoc($resultado_sub_cat3) ) {
		$sub_categorias_post3[] = array(
			'idServico'	=> $row_sub_cat3['idServico'],
			'nomeServico'=> $row_sub_cat3['nomeServico'],
		);
	}
	
	echo(json_encode($sub_categorias_post3));