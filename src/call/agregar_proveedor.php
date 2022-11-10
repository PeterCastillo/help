<?php
	include_once '../services/provv.php';
	$conn = conectar();

	$action = $_REQUEST['accion'];

	if($action === 'Agregar'){
	$cod = $_REQUEST['codigo'];
	$nom = $_REQUEST['nombre'];
	$textarea = $_REQUEST['text'];
	$contac = $_REQUEST['contacto'];
	agregarProveedor($cod,$nom,$textarea,$contac,$conn);
	}

	if($action === 'eliminar'){
		$cod = $_REQUEST['codigo'];
		eliminarProvedor($cod,$conn);
	}

	if($action === 'Modificar'){
		$cod = $_REQUEST['codigo'];
		$nom = $_REQUEST['nombre'];
		$textarea = $_REQUEST['text'];
		$contac = $_REQUEST['contacto'];
		actualizarProvedor($cod,$nom,$contac,$textarea,$conn);


	}

	header ('location:../components/prov.php');


?>