<?php
function conectar() {
    $conn= mysqli_connect ("localhost","root","","licoreriaproductos"); 
   /*if(!$conn){
        die("No puede conectarse ".mysqli_error());
    }
    else{
        echo "Conexión satisfactoria";
    }*/
    return $conn; 
}
function agregarProveedor($cod,$nom,$contac,$textarea,$conn){
    $sql="insert into provedores values('$cod','$nom','$contac','$textarea')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
//método para listar registros
function listarProveedor($conn){
    $sql="select provedor_id, provedor_nombre, provedor_descripcion, provedor_contacto from provedores";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

function eliminarProvedor($cod,$conn){
    $sql="delete from provedores where provedor_id='$cod'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
//método para buscar registro
function buscarProvedor($cod,$conn){
    $sql="select provedor_nombre, provedor_descripcion, provedor_contacto from provedores where provedor_id='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}
//método para actualizar registros sin foto
function actualizarProvedor($cod,$nom,$contac,$textarea,$conn){
    $sql="update provedores set provedor_nombre='$nom', provedor_descripcion='$textarea', provedor_contacto='$contac' where provedor_id='$cod'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
?>
