<?php
    $conn = new mysqli("localhost", "root", "", "licoreriaproductos");
    $codProducto = $_GET['id'];
    $sql = "DELETE FROM productos WHERE producto_id='$codProducto'";
    $query = $conn->query($sql);
    $conn->close();
    if($query){
        Header("Location: http://localhost/LicoreriaManagement/");
    }
?>