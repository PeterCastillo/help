<?php
    
	$conn=mysqli_connect("localhost", "root", "", "licoreriaproductos");
	include_once '../services/update.php';
	$btn=$_REQUEST['btnED'];

	if($btn==='Aceptar'){
		if(!empty($_FILES['imagen']['name'])){
			$id=$_REQUEST['id'];
			$nom=$_REQUEST['nombre'];
			$des=$_REQUEST['descripcion'];
			$img=$_FILES['imagen']['name'];
			$rut=$_FILES['imagen']['tmp_name'];
			$nwrut='../imagenes/'.$img;
			$pre=$_REQUEST['precio'];
			$cat=$_REQUEST['categoria'];
			$prv=$_REQUEST['proveedor'];
			$mar=$_REQUEST['marca'];
			$cant=$_REQUEST['cantidad'];
			copy($rut, $nwrut);
			editAllProducto($id,$nom,$des,$nwrut,$pre,$cat,$prv,$mar,$cant,$conn);
		}else{
			$id=$_REQUEST['id'];
			$nom=$_REQUEST['nombre'];
			$des=$_REQUEST['descripcion'];
			$pre=$_REQUEST['precio'];
			$cat=$_REQUEST['categoria'];
			$prv=$_REQUEST['proveedor'];
			$mar=$_REQUEST['marca'];
			$cant=$_REQUEST['cantidad'];
			editProducto($id,$nom,$des,$pre,$cat,$prv,$mar,$cant,$conn);
		}
	}
	header ('location:../../index.php');
   
?>