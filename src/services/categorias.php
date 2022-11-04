<?php
    function getCategorias(){
        $conn = new mysqli("localhost", "root", "", "licoreriaproductos");
        $sql = "SELECT * FROM categorias";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $data = $result;
        }
        $conn->close();
        return $data;
    }
?>
