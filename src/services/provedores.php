<?php
    function getProvedores(){
        $conn = new mysqli("localhost", "root", "", "licoreriaproductos");
        $sql = "SELECT provedor_id, provedor_nombre, provedor_descripcion FROM provedores";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $data = $result;
        }
        $conn->close();
        return $data;
    }
?>

