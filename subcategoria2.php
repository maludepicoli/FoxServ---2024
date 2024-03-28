<?php include_once("config.php");
	
	
	$idTipoServico2 = $_REQUEST['idTipoServico2'];
	
	$result_sub_cat2 = "SELECT * FROM servico WHERE idTipoServico = $idTipoServico2";
	$resultado_sub_cat2 = mysqli_query($conexao, $result_sub_cat2);
	
	while ($row_sub_cat2 = mysqli_fetch_assoc($resultado_sub_cat2) ) {
		$sub_categorias_post2[] = array(
			'idServico'	=> $row_sub_cat2['idServico'],
			'nomeServico'=> $row_sub_cat2['nomeServico'],
		);
	}
	
	echo(json_encode($sub_categorias_post2));