<?php
	require ('../Modelo/Conexion.php');
    require ('../Modelo/ModeloFormulario.php');
	
	$id_estado = $_POST['id_municipio'];
    $respuesta = ModeloFormulario::mdlRetornarLugar('lugar', 'fk_Lugar', $id_estado);
	
	$html= "<option value='0'>Seleccionar Parroquia</option>";
	
	foreach($respuesta as $rowM)
	{
		$html.= "<option value='".$rowM['Lugar_ID']."'>".$rowM['Lugar_Nombre']."</option>";
	}
	
	echo $html;
?>