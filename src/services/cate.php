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
function agregarCategoria($cod,$nom,$textarea,$conn){
    $sql="insert into categorias values('$cod','$nom','$textarea')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
//método para listar registros
function listarCategoria($conn){
    $sql="select categoria_id, categoria_nombre, categoria_descripcion from categorias";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

function eliminarCategoria($cod,$conn){
    $sql="delete from categorias where categoria_id='$cod'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
//método para buscar registro
function buscarCategoria($cod,$conn){
    $sql="select categoria_nombre, categoria_descripcion from categorias where categoria_id='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}
//método para actualizar registros sin foto
function actualizarCategoria($cod,$nom,$textarea,$conn){
    $sql="update categorias set categoria_nombre='$nom', categoria_descripcion='$textarea' where categoria_id='$cod'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
?>