<?php
//método para editar producto cambiando la foto
function editAllProducto($cod,$nom,$des,$img,$pre,$cat,$prv,$mar,$cant,$conn){
    $sql="update productos set producto_nombre='$nom', producto_descripcion='$des', producto_img='$img', producto_precio='$pre', producto_categoria='$cat', producto_provedor='$prv', producto_marca='$mar', producto_cantidad='$cant' where producto_id='$cod'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
 //método para editar producto sin modifcar la foto
function editProducto($cod,$nom,$des,$pre,$cat,$prv,$mar,$cant,$conn){
    $sql="update productos set producto_nombre='$nom', producto_descripcion='$des', producto_precio='$pre', producto_categoria='$cat', producto_provedor='$prv', producto_marca='$mar', producto_cantidad='$cant' where producto_id='$cod'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
 //método para buscar producto
function searchPro($cod,$conn){
    $sql="select producto_nombre, producto_descripcion, producto_img, producto_precio, producto_categoria,producto_provedor,producto_marca, producto_cantidad from productos where producto_id='$cod'";
    $res= mysqli_query($conn, $sql);
    $dat=array();
    if(mysqli_num_rows($res)>0){
        $dat= mysqli_fetch_array($res);
    }
    return $dat; 
}
function listProveedor($conn){
    $sql="select provedor_id, provedor_nombre from provedores";
    $res= mysqli_query($conn, $sql);
    $dat=array();
    while($f= mysqli_fetch_array($res))  
        $dat[]=$f;
    return $dat;
}

function listCategoria($conn){
    $sql="select categoria_id, categoria_nombre from categorias";
    $res= mysqli_query($conn, $sql);
    $dat=array();
    while($f= mysqli_fetch_array($res))  
        $dat[]=$f;
    return $dat;
}

?>

    