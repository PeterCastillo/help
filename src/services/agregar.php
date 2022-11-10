<?php
function conectar() {
    $conn= mysqli_connect("localhost","root","","licoreriaproductos"); 
    // if(!$conn){
    //     die("No puede conectarse ".mysqli_error());
    // }
    // else{
    //     echo "Conexión satisfactoria";
    // }
    return $conn; 
}

function agregarProducto($nomb,$desc,$miruta,$prec,$cate,$prov,$marc,$cant,$conn){
	$sql="insert into productos(producto_nombre,producto_descripcion,producto_img,producto_precio,producto_categoria,producto_provedor,producto_marca,producto_cantidad) values('$nomb','$desc','$miruta','$prec','$cate','$prov','$marc','$cant')";
	mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
?>