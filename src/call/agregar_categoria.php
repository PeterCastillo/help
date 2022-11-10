<?php
    include_once '../services/cate.php';
    $conn = conectar();

    $action = $_REQUEST['accion'];

    if($action === 'Agregar'){
    $cod = $_REQUEST['codigo'];
    $nom = $_REQUEST['nombre'];
    $textarea = $_REQUEST['text'];    
    agregarCategoria($cod,$nom,$textarea,$conn);
    }

    if($action === 'eliminar'){
        $cod = $_REQUEST['codigo'];
        eliminarCategoria($cod,$conn);
    }

    if($action === 'Modificar'){
        $cod = $_REQUEST['codigo'];
        $nom = $_REQUEST['nombre'];
        $textarea = $_REQUEST['text'];
        actualizarCategoria($cod,$nom,$textarea,$conn);


    }

    header ('location:../components/categoria.php');


?>