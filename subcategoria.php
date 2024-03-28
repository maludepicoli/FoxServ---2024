<?php include_once("config.php");

	$idTipoServico = $_REQUEST['idTipoServico'];
	
	$result_sub_cat = "SELECT * FROM servico WHERE idTipoServico = $idTipoServico";
	$resultado_sub_cat = mysqli_query($conexao, $result_sub_cat);
	
	while ($row_sub_cat = mysqli_fetch_assoc($resultado_sub_cat) ) {
		$sub_categorias_post[] = array(
			'idServico'	=> $row_sub_cat['idServico'],
			'nomeServico'=> $row_sub_cat['nomeServico'],
		);
	}
		echo(json_encode($sub_categorias_post));
		
