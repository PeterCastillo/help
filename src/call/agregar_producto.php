<?php


    include_once '../services/agregar.php';
    $conn = conectar();
     
    $action= $_REQUEST['accion'];

    if($action === 'Agregar'){
    $nomb = $_REQUEST['nombrep'];
    $desc = $_REQUEST['descripcionp'];
    $img = $_FILES['imagenp']['name'];
    $ruta = $_FILES['imagenp']['tmp_name'];
    $miruta = '../imagenes/'.$img;
    copy($ruta, $miruta);
    $prec = $_REQUEST['preciop'];
    $cate = $_REQUEST['categoria'];
    $prov = $_REQUEST['provedor'];
    $marc = $_REQUEST['marcap'];
    $cant = $_REQUEST['cantidadp'];

    agregarProducto($nomb,$desc,$miruta,$prec,$cate,$prov,$marc,$cant,$conn);
   }
   
   header ('location:../../index.php');
?>